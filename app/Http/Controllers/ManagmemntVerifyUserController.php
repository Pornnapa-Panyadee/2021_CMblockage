<?php

namespace App\Http\Controllers;

use App\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ManagmemntVerifyUserController extends Controller
{
    //
    public function managementVerifyusers(User $user){
        $name=Auth::user()->name ;
        $verify_status = Auth::user()->verify;
        // dd($name);
        if($name == "admin" && $verify_status == 1){
            $users_register = DB::table('users')->select('*')
            ->where('verify','=',0)
            ->get();
            $userRegisterJson = json_decode($users_register,true);
            // dd($userRegisterJson);
            return view('ManagementVerifyUser', compact('userRegisterJson'));
        }
        else
        {   
            $massageNotic = "If you are admin please contact";
            return view('verifyMessage', compact('massageNotic'));
        }

        }
}


