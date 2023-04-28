<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function admin(){
        if(session("login_email")){
            return view("backend/admin");
        }else{
            return redirect(route("name_loginView"));
        }
       
    }
}
