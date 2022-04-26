<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Area_Category;
use App\Models\Associate_Member;
use App\Models\Current_Appoinment;
use App\Models\Current_Organization;
use App\Models\Essential_Category;
use App\Models\Essential_Information;
use App\Models\Payments_Info;
use App\Models\Personal_Information;
use App\Models\User;
use App\Models\User_Area_of_Interests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


class UserEditController extends Controller
{
    public function update($id){
        $personal_information = Personal_Information::where('user_id', $id)->first();        
        $essential_informations = Essential_Information::where('user_id', $id)->where('deleted', 0)->get();
        $associate_members = Associate_Member::where('user_id', $id)->where('deleted', 0)->get();
        $current_organizations = Current_Organization::where('user_id', $id)->where('deleted', 0)->get();
        $current_appoinments = Current_Appoinment::where('user_id', $id)->where('deleted', 0)->get();
        $area_id = User_Area_of_Interests::where('user_id', $id)->get();
        $area_name = [];
        foreach($area_id as $key=>$id){
            $area_of_interests = Area_Category::where('id', $area_id[$key]->area_id)->get();
            array_push($area_name,  $area_of_interests);
        }
        return view('admin.user_edit', compact('personal_information', 'essential_informations', 
        'associate_members', 'current_organizations', 'current_appoinments', 'area_name'));
    }
    public function update_store(Request $req){
        
        if($req->file('image')){
            $image = $req->file('image');
            Storage::putFile('public/personal_image', $image);
            Personal_Information::where('id', $req->personal_info_id)
                                ->update([
                                    'image'=> "storage/personal_image/".$image->hashName()
                                ]);
        }
        if($req->personal_info_id){
            Personal_Information::where('id', $req->personal_info_id)
                                ->update([
                                    'first_name'=> $req->first_name,
                                    'middle_name'=> $req->middle_name,
                                    'last_name'=> $req->last_name,
                                    'bith_date'=> $req->birth_date,
                                    'gender'=> $req->gender,
                                    'father_name'=> $req->father_name,
                                    'mother_name'=> $req->mother_name,
                                    'phone'=> $req->phone,
                                    'tel'=> $req->tel,
                                    'email'=> $req->email,
                                    'nid'=> $req->nid,
                                    'address'=> $req->address,
                                    'membership_id'=>$req->membership_id
                                ]);
        }
        if($req->essential_info_id){
            foreach($req->essential_info_id as $key=>$essential_info){
                Essential_Information::where('id', $essential_info)
                                        ->update([
                                            'degree'=>$req->degree[$key],
                                            'passing_year'=>$req->passing_year[$key],
                                            'institutation'=>$req->institutation[$key],
                                            'university'=>$req->university[$key],
                                            'bmdc_reg_no'=>$req->bmdc_reg_no[$key],
                                            'bmdc_reg_year'=>$req->bmdc_reg_yr[$key]
                                        ]);
            } 
        }
        if($req->associate_member_id){
            foreach($req->associate_member_id as $key=>$associate_info){
                Associate_Member::where('id', $associate_info)
                                        ->update([
                                            'institute'=>$req->institute[$key],
                                            'from'=>$req->from[$key],
                                            'to'=>$req->to[$key],
                                        ]);
            }   
        }
        if($req->current_appoinment_id){
            foreach($req->current_appoinment_id as $key=>$current_appoinment_info){
                Current_Appoinment::where('id', $current_appoinment_info)
                                        ->update([
                                            'designation'=>$req->ca_designation[$key],
                                            'hospital'=>$req->ca_hospital[$key],
                                            'from'=>$req->ca_from[$key],
                                        ]);
            }   
        }
        if($req->current_organization_id){
            foreach($req->current_organization_id as $key=>$current_organization_info){
                Current_Organization::where('id', $current_organization_info)
                                        ->update([
                                            'name'=>$req->co_name[$key],
                                            'position'=>$req->co_position[$key],
                                        ]);
            }  
        }
                                      
        return redirect()->back()->with('success', 'Updated Successfully');                      
    }
    public function essential_info_delete($id){
        Essential_Information::where('id', $id)
                                ->update([
                                    'deleted'=>1,
                                ]);
        return redirect()->back()->with('danger', 'Data Deleted Successfully');
    }
    public function associate_info_delete($id){
        Associate_Member::where('id', $id)
                                ->update([
                                    'deleted'=>1,
                                ]);
        return redirect()->back()->with('danger', 'Data Deleted Successfully');
    }
    public function appoinment_info_delete($id){
        Current_Appoinment::where('id', $id)
                                ->update([
                                    'deleted'=>1,
                                ]);
        return redirect()->back()->with('danger', 'Data Deleted Successfully');
    }
    public function organization_info_delete($id){
        Current_Organization::where('id', $id)
                                ->update([
                                    'deleted'=>1,
                                ]);
        return redirect()->back()->with('danger', 'Data Deleted Successfully');
    }
}
