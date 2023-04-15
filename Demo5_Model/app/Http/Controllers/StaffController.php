<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff;

class StaffController extends Controller
{
    //
    function addStudent(){
        return view("register");
    }

    function saveRecord(Request $req){

        $add_staff = new Staff();
       
       $add_staff->name = $req["fname"];  
       $add_staff->email = $req["email"];  
       $add_staff->password = $req["password"];  
       $add_staff->role = $req["role"];
       $add_staff->save();
    }
}
