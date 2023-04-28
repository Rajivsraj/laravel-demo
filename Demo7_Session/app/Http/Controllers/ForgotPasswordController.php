<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LoginRegister;

class ForgotPasswordController extends Controller
{
    function forgotPassword(Request $req){
        $cur_pass = $req["current_pass"];
        $new_pass = $req["new_pass"];
        $confirm_pass = $req["confirm_pass"];

        $logged_email  = session("login_email");
        
        $loggedInUser = LoginRegister::where(["email"=>$logged_email, "password"=>$cur_pass])->first();
        // $loggedInUser["password"] = "sdklfjlskd";
        if($cur_pass == $loggedInUser["password"] && $logged_email == $loggedInUser["email"]){
            if($new_pass == $confirm_pass){
                $loggedInUser["password"] = $new_pass;
                $loggedInUser->save();
                return redirect(route("name_adminView"))->with("success", "Password Changed Successfully");
            }
        }
        return $loggedInUser;
    }
}
