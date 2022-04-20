<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Area_Category;
use Illuminate\Http\Request;
use App\Models\Essential_Information;
use App\Models\Associate_Member;
use App\Models\Current_Appoinment;
use App\Models\Current_Organization;
use App\Models\File_Upload;
use App\Models\Payments_Info;
use App\Models\Personal_Information;
use App\Models\User;
use App\Models\User_Area_of_Interests;

class PermissionController extends Controller
{
    public function permission(){
        $users = User::where('id', auth()->user()->id)->get();
        $payments = Payments_Info::where('user_id', $users[0]->id)->get();
        $personal = Personal_Information::where('user_id',auth()->user()->id)->select('permission')->first();
        $essential_info = Essential_Information::where('user_id',auth()->user()->id)->select('permission')->first();
        $active = Associate_Member::where('user_id',auth()->user()->id)->select('permission')->first();
        $file = File_Upload::where('user_id',auth()->user()->id)->select('permission')->first();
        $organization = Current_Organization::where('user_id',auth()->user()->id)->select('permission')->first();
        $appoinment = Current_Appoinment::where('user_id',auth()->user()->id)->select('permission')->first();
        $area = User_Area_of_Interests::where('user_id',auth()->user()->id)->select('permission')->first();
        if($payments->isEmpty()){
            return redirect()->back()->with('error', 'Please Complete The Form First.');
        }else{
            return view('user.permission', compact('personal','essential_info','active','file','organization','appoinment','area'));
        }
    }
    public function permission_personal_store($value){
        // return $value;
        if($value == 1){
            Personal_Information::where('user_id',auth()->user()->id)->update([
                'permission'=>1
            ]);
        }else{
            Personal_Information::where('user_id',auth()->user()->id)->update([
                'permission'=>0
            ]);
        }
        return redirect()->back()->with('success', 'Permission Updated');
    }
    public function permission_essential_store($value){
        // return $value;
        if($value == 1){
            Essential_Information::where('user_id',auth()->user()->id)->update([
                'permission'=>1
            ]);
        }else{
            Essential_Information::where('user_id',auth()->user()->id)->update([
                'permission'=>0
            ]);
        }
        return redirect()->back()->with('success', 'Permission Updated');
    }
    public function permission_active_store($value){
        // return $value;
        if($value == 1){
            Associate_Member::where('user_id',auth()->user()->id)->update([
                'permission'=>1
            ]);
        }else{
            Associate_Member::where('user_id',auth()->user()->id)->update([
                'permission'=>0
            ]);
        }
        return redirect()->back()->with('success', 'Permission Updated');
    }
    public function permission_file_store($value){
        // return $value;
        if($value == 1){
            File_Upload::where('user_id',auth()->user()->id)->update([
                'permission'=>1
            ]);
        }else{
            File_Upload::where('user_id',auth()->user()->id)->update([
                'permission'=>0
            ]);
        }
        return redirect()->back()->with('success', 'Permission Updated');
    }
    public function permission_organization_store($value){
        // return $value;
        if($value == 1){
            Current_Organization::where('user_id',auth()->user()->id)->update([
                'permission'=>1
            ]);
        }else{
            Current_Organization::where('user_id',auth()->user()->id)->update([
                'permission'=>0
            ]);
        }
        return redirect()->back()->with('success', 'Permission Updated');
    }
    public function permission_appoinment_store($value){
        // return $value;
        if($value == 1){
            Current_Appoinment::where('user_id',auth()->user()->id)->update([
                'permission'=>1
            ]);
        }else{
            Current_Appoinment::where('user_id',auth()->user()->id)->update([
                'permission'=>0
            ]);
        }
        return redirect()->back()->with('success', 'Permission Updated');
    }
    public function permission_area_store($value){
        // return $value;
        if($value == 1){
            User_Area_of_Interests::where('user_id',auth()->user()->id)->update([
                'permission'=>1
            ]);
        }else{
            User_Area_of_Interests::where('user_id',auth()->user()->id)->update([
                'permission'=>0
            ]);
        }
        return redirect()->back()->with('success', 'Permission Updated');
    }
    public function update($id){
        $personal_information = Personal_Information::where('user_id', $id)->first();
        $essential_informations = Essential_Information::where('user_id', $id)->get();
        $associate_members = Associate_Member::where('user_id', $id)->get();
        $current_organizations = Current_Organization::where('user_id', $id)->get();
        $current_appoinments = Current_Appoinment::where('user_id', $id)->get();
        $area_id = User_Area_of_Interests::where('user_id', $id)->get();
        $area_name = [];
        foreach($area_id as $key=>$id){
            $area_of_interests = Area_Category::where('id', $area_id[$key]->area_id)->get();
            array_push($area_name,  $area_of_interests);
        }
        return view('user.user_edit', compact('personal_information', 'essential_informations', 
        'associate_members', 'current_organizations', 'current_appoinments', 'area_name'));
    }
    public function update_store(Request $req){
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
                                    'address'=> $req->address
                                ]);
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
        foreach($req->associate_member_id as $key=>$associate_info){
            Associate_Member::where('id', $associate_info)
                                    ->update([
                                        'institute'=>$req->institute[$key],
                                        'from'=>$req->from[$key],
                                        'to'=>$req->to[$key],
                                    ]);
        }                        
        foreach($req->current_appoinment_id as $key=>$current_appoinment_info){
            Current_Appoinment::where('id', $current_appoinment_info)
                                    ->update([
                                        'designation'=>$req->ca_designation[$key],
                                        'hospital'=>$req->ca_hospital[$key],
                                        'from'=>$req->ca_from[$key],
                                    ]);
        }                        
        foreach($req->current_organization_id as $key=>$current_organization_info){
            Current_Organization::where('id', $current_organization_info)
                                    ->update([
                                        'name'=>$req->co_name[$key],
                                        'position'=>$req->co_position[$key],
                                    ]);
        }                        

        
        return redirect()->back()->with('success', 'Updated Successfully');                      
    }
}
