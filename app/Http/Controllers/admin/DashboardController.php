<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Area_Category;
use App\Models\Associate_Member;
use App\Models\Current_Appoinment;
use App\Models\Current_Organization;
use App\Models\Essential_Category;
use App\Models\Essential_Information;
use App\Models\File_Upload;
use App\Models\Payments_Info;
use App\Models\Personal_Information;
use App\Models\User;
use App\Models\User_Area_of_Interests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class DashboardController extends Controller
{
    public function index(){
        $users = DB::table('users')
                    ->where('admin', 0)
                    ->leftJoin('payments__infos', 'users.id', '=', 'payments__infos.user_id')
                    ->leftJoin('personal__information', 'users.id', '=', 'personal__information.user_id')
                    ->select('users.*', 'payments__infos.membership_category', 'payments__infos.date',
                        'payments__infos.trx_id', 'payments__infos.file', 'personal__information.phone')
                    ->orderBy('id', 'desc')
                    ->paginate(5);
        return view('admin.dashboard',compact('users'));
    }
    public function status($id, $status){
        User::where('id', $id)->update(array( 'status' => $status));
        return redirect()->back()->with('success', 'User Status Changed Successfully');
    }
    public function user_details($id){
        $pdf_id = $id;
        $personal_information = Personal_Information::where('user_id', $id)->get();
        $essential_informations = Essential_Information::where('user_id', $id)->get();
        $associate_members = Associate_Member::where('user_id', $id)->get();
        $current_organizations = Current_Organization::where('user_id', $id)->get();
        $current_appoinments = Current_Appoinment::where('user_id', $id)->get();
        $area_id = User_Area_of_Interests::where('user_id', $id)->get();
        $file_uploads = File_Upload::where('user_id', $id)->get();
        $area_name = [];
        foreach($area_id as $key=>$id){
            $area_of_interests = Area_Category::where('id', $area_id[$key]->area_id)->get();
            array_push($area_name,  $area_of_interests);
        }
        return view('admin.user_details', compact('pdf_id','personal_information', 'essential_informations', 
        'associate_members', 'current_organizations', 'current_appoinments', 'area_name', 'file_uploads'));
    }
    public function search(Request $req){
        $users = DB::table('users')
                    ->where('admin', 0)
                    ->leftJoin('payments__infos', 'users.id', '=', 'payments__infos.user_id')
                    ->leftJoin('personal__information', 'users.id', '=', 'personal__information.user_id')
                    ->where('users.name', 'LIKE', '%'.$req->data.'%')
                    ->orWhere('personal__information.phone', 'LIKE', '%'.$req->data.'%')
                    ->select('users.*', 'payments__infos.membership_category', 'payments__infos.date',
                        'payments__infos.trx_id', 'payments__infos.file', 'personal__information.phone')
                    ->orderBy('id', 'desc')
                    ->paginate(5);
        return view('admin.dashboard',compact('users'));
    }
    public function download($id){        
        $personal_information = Personal_Information::where('user_id', $id)->get();
        // $essential_informations = Essential_Information::where('user_id', $id)->get();
        // $associate_members = Associate_Member::where('user_id', $id)->get();
        // $current_organizations = Current_Organization::where('user_id', $id)->get();
        // $current_appoinments = Current_Appoinment::where('user_id', $id)->get();
        // $area_id = User_Area_of_Interests::where('user_id', $id)->get();
        // $file_uploads = File_Upload::where('user_id', $id)->get();
        // $area_name = [];
        // foreach($area_id as $key=>$id){
        //     $area_of_interests = Area_Category::where('id', $area_id[$key]->area_id)->get();
        //     array_push($area_name,  $area_of_interests);
        // }
        // return view('admin.user_details_download', compact('personal_information', 'essential_informations', 
        // 'associate_members', 'current_organizations', 'current_appoinments', 'area_name', 'file_uploads'));

        $data = [
            'title' => 'Bangladesh Endocrine Society (BES)',
            'sub_title' => 'Membership Information',
            'personal_information' => $personal_information
        ];
        $pdf = PDF::loadView('admin.user_details_download', $data);
        return $pdf->stream('new.pdf');
    }
}

