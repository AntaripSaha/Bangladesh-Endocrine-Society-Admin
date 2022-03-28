<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Essential_Category;
use App\Models\Essential_Information;
use App\Models\Personal_Information;
use App\Models\Area_Category;
use App\Models\Area_Sub_Category;
use App\Models\Associate_Member;
use App\Models\Current_Appoinment;
use App\Models\Current_Organization;
use App\Models\File_Upload;
use App\Models\Payments_Info;
use App\Models\User_Area_of_Interests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    public function index(){
        return view('user.dashboard');
    }
    public function personal_info_store(Request $req){
        $req->validate(
            [
                'gender' => 'required',
                'email' => 'required|unique:personal__information,email'
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
        $current_appoinments = Current_Appoinment::where('user_id', auth()->user()->id)->get();
        $associate_members = Associate_Member::where('user_id', auth()->user()->id)->get();
        $current_organizations = Current_Organization::where('user_id', auth()->user()->id)->get();
        return view('user.files', compact('associate_members','current_organizations','current_appoinments'));
    }
    public function file_associate_add(Request $req){
        $associate_members = new Associate_Member;
        $associate_members->institute = $req->institute;
        $associate_members->from = $req->from;
        $associate_members->to = $req->to;
        $associate_members->user_id = auth()->user()->id;
        if($associate_members->save()){
            return redirect()->back()->with('success', 'Data Stored');
        }
    }
    public function file_associate_delete($id){
        $associate_members = Associate_Member::find($id);
        $associate_members->delete();
        return redirect()->back()->with('danger', 'Data Removed');
    }
    public function file_current_organization_add(Request $req){
        $current_organization = new Current_Organization;
        $current_organization->name = $req->organization;
        $current_organization->position = $req->position;
        $current_organization->user_id = auth()->user()->id;
        if($current_organization->save()){
            return redirect()->back()->with('success', 'Data Stored');
        }
    }
    public function file_current_organization_delete($id){
        $current_organization = Current_Organization::find($id);
        $current_organization->delete();
        return redirect()->back()->with('danger', 'Data Removed');
    }
    public function file_current_appointment_add(Request $req){
        $current_appoinment = new Current_Appoinment;
        $current_appoinment->designation = $req->designation;
        $current_appoinment->hospital = $req->hospital;
        $current_appoinment->from = $req->from;
        $current_appoinment->user_id = auth()->user()->id;
        if($current_appoinment->save()){
            return redirect()->back()->with('success', 'Data Stored');
        }
    }
    public function file_current_appointment_delete($id){
        $current_appoinment = Current_Appoinment::find($id);
        $current_appoinment->delete();
        return redirect()->back()->with('danger', 'Data Removed');
    }
    public function file_document_add(Request $req){
        $req->validate(
            [
                'user_id' => 'required|unique:file__uploads,user_id'
            ],[
                'user_id.required' => 'User Already Exists'
            ]);
        $file_upload = new File_Upload;
        $file_upload->user_id = auth()->user()->id;
        if($req->file('nid')){
            $file = $req->file('nid');
            Storage::putFile('public/file', $file);
            $file_upload->nid =  "storage/file/" . $file->hashName();
        }
        if($req->file('bmdc')){
            $file = $req->file('bmdc');
            Storage::putFile('public/file', $file);
            $file_upload->bmdc_reg_certificate =  "storage/file/" . $file->hashName();
        }
        if($req->file('degree')){
            $file = $req->file('degree');
            Storage::putFile('public/file', $file);
            $file_upload->certificate_all_degree =  "storage/file/" . $file->hashName();
        }
        if($req->file('active_perticipation')){
            $file = $req->file('active_perticipation');
            Storage::putFile('public/file', $file);
            $file_upload->active_perticipation =  "storage/file/" . $file->hashName();
        }
        if($file_upload->save()){
            return redirect()->route('payment')->with('success', 'All Data Saved Successfully.');
        }
    }
    public function payment(){
        return view('user.payment');
    }
    public function payment_store(Request $req){
        $req->validate(
            [
                'user_id' => 'required|unique:file__uploads,user_id'
            ],[
                'user_id.required' => 'User Already Exists'
            ]);
        $payments_infos = new Payments_Info;
        $payments_infos->membership_category = $req->checkbox; 
        $payments_infos->date = $req->date; 
        $payments_infos->trx_id = $req->trx_id; 
        $payments_infos->user_id = auth()->user()->id;
        if($req->file('file')){
            $file = $req->file('file');
            Storage::putFile('public/payment_receipt', $file);
            $payments_infos->file = "storage/payment_receipt/".$file->hashName();
        }
        if($payments_infos->save()){
            return redirect()->route('area')->with('success', 'All Data Saved Successfully.');
        }        
    }
    public function area(){
       $areas = Area_Category::All();
       $area_sub =  Area_Sub_Category::All();
       return view('user.area', compact('areas', 'area_sub'));
    }
    public function area_details($id){
        $areas = Area_Sub_Category::where('area_category',$id)->select('name')->get();
        return view('user.area_details', compact('areas'));
    }
    public function area_store(Request $request){
        $area = User_Area_of_Interests::where('user_id', auth()->user()->id)->count();
        if($area == 0 || $area <= 4  ){
            $areas = new User_Area_of_Interests;
            $all = array();
            $i = 0;
            foreach($request->area as $key=>$area){
                $i = $i+1;
            }
            if($i+$area > 5){
                return redirect()->back()->with('error', 'You Can Not Add More Than 5');
            }else{
                foreach( $request->area as $key=>$area){
                    array_push($all, array(
                    'user_id' => auth()->user()->id,
                    'area_id' => $request->area[$key],
                    ));
                }
                $areas::insert($all); 
                return redirect()->route('final')->with('success', 'Data Saved');
            }
        }else{
            return redirect()->back()->with('error', 'You Can Not Add More Than 5');
        }
    }
    public function final(){
        return view('user.final');
    }
}
