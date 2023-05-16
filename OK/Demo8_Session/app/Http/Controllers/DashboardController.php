<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;

class DashboardController extends Controller
{

    
       
    function dashboard_view(){
        // if(session()->has("loggedin_user_email")){
        //     $loggedn_email = session("loggedin_user_email");
        //     $user_data = Register::where(["email"=>$loggedn_email])->first();
        //     return view("admin.dashboard", ["user_data"=>$user_data]);
        // }else{
        //     return redirect(route("name_login_view"));
        // }
        
        // if(!session()->has("loggedin_user_email")){
        //     return redirect(route("name_login_view"));
        // }

        $loggedn_email = session("loggedin_user_email");
        $user_data = Register::where(["email"=>$loggedn_email])->first();
        // echo $user_data->username;
        return view("admin.dashboard", ["user_data"=>$user_data]);
    }

    function change_password_view(){
        return view("change-password");
    }

    function change_password(Request $req){
        
        $loggedInEmail = session("loggedin_user_email");
        

        $cur_pass = $req["current_pass"];
        $new_pass = $req["new_pass"];
        $confirm_pass = $req["confirm_pass"];
        if($new_pass != $confirm_pass){
            return redirect()->route("name_change_password_view")->with("error", "Confirm Password mismatch");
        }
        $user_data = Register::where(["email"=>$loggedInEmail, "password"=>$cur_pass])->first();
        

        if($user_data){
            $user_data->password = $new_pass;
            $user_data->save();
            return redirect()->route("name_dashboard_view")->with("success", "Password Changed");
        }else{
            echo "Invalid Current Password";
        }
        

        // return view("change-password");
    }
}
