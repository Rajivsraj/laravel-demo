<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;

class DashboardController extends Controller
{
    function dashboard_view(){
        if(session()->has("loggedin_user_email")){
            $loggedn_email = session("loggedin_user_email");
            $user_data = Register::where(["email"=>$loggedn_email])->first();
            return view("admin.dashboard", ["user_data"=>$user_data]);
        }else{
            return redirect(route("name_login_view"));
        }
        
    }
}
