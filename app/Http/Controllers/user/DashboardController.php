<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Personal_Information;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    
    public function index(){
        return view('user.dashboard');
    }

    public function store(Request $req){

        $validate = $req->validate(
            [
                'gender' => 'required'
            ],[
                'gender.required' => 'Gender is Required'
            ]);

        if($req){
            $personal_information = new Personal_Information;
            $personal_information->first_name = $req->first_name;
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
                return redirect()->back()->with('success', 'Information Saved...');
            }
        }


    }
    
}
