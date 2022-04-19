<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
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
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserListController extends Controller
{
    public function application_status(){
        $users = User::where('id', auth()->user()->id)->get();
        $payments = Payments_Info::where('user_id', $users[0]->id)->get();
        if($payments->isEmpty()){
            return redirect()->back()->with('error', 'Please Complete The Form First.');
        }else{
            return view('user.application_status', compact('users','payments'));
        }
    }
    public function user_list(){
        $status = User::where('id', auth()->user()->id)->pluck('status');
        if( $status[0] == 1){
           $users = DB::table('users')
                        ->where('admin', 0)
                        ->where('status', 1)
                        ->leftJoin('personal__information', 'users.id', '=', 'personal__information.user_id')
                        ->leftJoin('current__appoinments', 'users.id', '=', 'current__appoinments.user_id')
                        ->select('users.*', 'personal__information.phone', 'personal__information.address', 'current__appoinments.designation')
                        ->paginate(10);
        return view('user.user_list',compact('users'));
        }else{
            return redirect()->route('application.status')->with('error', 'You Are Not Approved Yet. Please Wait for the Approval. ');
        }
        return view('user.user_list');
    }
    public function user_information($id){
        $personal_information = Personal_Information::where('user_id', $id)->where('permission',1)->get();
        $essential_informations = Essential_Information::where('user_id', $id)->where('permission',1)->get();
        $associate_members = Associate_Member::where('user_id', $id)->where('permission',1)->get();
        $current_organizations = Current_Organization::where('user_id', $id)->where('permission',1)->get();
        $current_appoinments = Current_Appoinment::where('user_id', $id)->where('permission',1)->get();
        $area_id = User_Area_of_Interests::where('user_id', $id)->where('permission',1)->get();
        $area_name = [];
        foreach($area_id as $key=>$id){
            $area_of_interests = Area_Category::where('id', $area_id[$key]->area_id)->get();
            array_push($area_name,  $area_of_interests);
        }
        return view('user.user_details', compact('personal_information', 'essential_informations', 
        'associate_members', 'current_organizations', 'current_appoinments', 'area_name'));
    }
    public function user_list_search(Request $req){
        $users = DB::table('users')
                    ->where('admin', 0)
                    ->leftJoin('personal__information', 'users.id', '=', 'personal__information.user_id')
                    ->leftJoin('current__appoinments', 'users.id', '=', 'current__appoinments.user_id')
                    ->where('users.name', 'LIKE', '%'.$req->data.'%')
                    ->orWhere('personal__information.phone', 'LIKE', '%'.$req->data.'%')
                    ->select('users.*', 'personal__information.phone', 'personal__information.address', 'current__appoinments.designation')
                    ->paginate(10);
        return view('user.user_list',compact('users'));
    }
}
