<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Essential_Category;
use App\Models\Essential_Information;
use App\Models\Personal_Information;
use App\Models\Area_Category;
use App\Models\Area_Sub_Category;
use App\Models\User_Area_of_Interests;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('user.dashboard');
    }
    public function personal_info_store(Request $req){
        $req->validate(
            [
                'gender' => 'required',
                'email' => 'required|unique:users,email'
            ],[
                'gender.required' => 'Gender is Required',
                'email.required' => 'User Already Exists'
            ]);
        if($req){
            $personal_information = new Personal_Information;
            $personal_information->first_name = $req->first_name;
            $personal_information->user_id = auth()->user()->id;
            $personal_information->middle_name = $req->middle_name;
            $personal_information->last_name = $req->last_name;
            $personal_information->bith_date = $req->birth_date;
            $personal_information->gender = $req->gender;
            $personal_information->father_name = $req->father_name;
            $personal_information->mother_name = $req->mother_name;
            $personal_information->phone = $req->phone;
            $personal_information->tel = $req->tel;
            $personal_information->email = $req->email;
            $personal_information->nid = $req->nid;
            $personal_information->address = $req->address;
            if($personal_information->save()){
                return redirect()->route('essential.information')->with('success', 'Information Saved...');
            }
        }
    }
    public function essential_info(){
        $degrees = Essential_Category::all();
        $essential_infos = Essential_Information::where('user_id', auth()->user()->id)->get();
        return view('user.essential', compact('essential_infos', 'degrees'));
    }
    public function essential_info_store(Request $req){
        $essential_info = new Essential_Information;
        $essential_info->user_id = auth()->user()->id;
        $essential_info->degree = $req->degree;
        $essential_info->passing_year = $req->passing_year;
        $essential_info->institutation = $req->institutation;
        $essential_info->university = $req->university;
        $essential_info->bmdc_reg_no = $req->bmdc_reg_no;
        $essential_info->bmdc_reg_year = $req->bmdc_reg_year;

        if($essential_info->save()){
            return redirect()->back()->with('success', 'Successfully Added The Information');
        }
    }
    public function essential_info_delete($id){
       $essential_info = Essential_Information::find($id);
       $essential_info->delete();
       return redirect()->back()->with('warning', 'Successfully Deleted');
    }
    public function file(Request $req){
        return view('user.files');
    }
    public function file_add(Request $req){
        return 'aaa';
    }
    public function payment(){
        return view('user.payment');
    }
    public function area(){
       $areas = Area_Category::All();
       $area_sub =  Area_Sub_Category::All();
       return view('user.area', compact('areas', 'area_sub'));
    }
    public function area_store(Request $request){
        $areas = new User_Area_of_Interests;
        $all = array();
        $i = 0;
        foreach($request->area as $key=>$area){
            $i = $i+1;
        }
        if($i>5){
            return redirect()->back()->with('error', 'You Can Not Add More Than 5');
        }else{
            foreach( $request->area as $key=>$area){
                array_push($all, array(
                'user_id' => auth()->user()->id,
                'area_id' => $request->area[$key],
                'area_sub_id' => $request->area[$key]
                ));
            }
            $areas::insert($all); 
            return redirect()->back()->with('success', 'Data Saved');
        }
    }
    public function area_details( $id){
        $areas = Area_Sub_Category::where('area_category',$id)->select('name')->get();
        return view('user.area_details', compact('areas'));
    }

}
