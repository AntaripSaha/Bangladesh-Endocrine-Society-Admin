<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
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
}
