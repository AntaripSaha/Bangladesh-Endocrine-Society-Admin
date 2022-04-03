<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Payments_Info;
use App\Models\User;
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
                        ->paginate(2);
        return view('user.user_list',compact('users'));
        }else{
            return redirect()->route('application.status')->with('error', 'You Are Not Approved Yet. Please Wait for the Approval. ');
        }
        return view('user.user_list');
    }
}
