<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AllRegisterUsersController extends Controller
{
    function all_user(Request $req){
        // return User::all();
        // return Auth::user();
        // return Auth::id();
        // return Auth::user()->name;
        // return Auth::user()->email;
        // return Auth::user()->password;
                #OR
        // return $req->user();
        // return $req->user()->id;
        // return $req->user()->name;
    }

    function staff(Request $req){
        return view("staff");
    }

    function check_user_loggedin_or_not(){
        if(Auth::check()){
            return "Logged in";
        }
        return "Need to login";
    }
}
