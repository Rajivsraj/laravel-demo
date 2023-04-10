<?php

namespace App\Http\Controllers\staff;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    //
    public function register(){
        return view("register");
    }

    public function reg_success(Request $req){
        print_r($req->all());
        $req->validate([
            "fname" => "required",
            "lname" => "required",
            "email" => "required",
            "pass" => "required",
        ]);

        
    }
}
