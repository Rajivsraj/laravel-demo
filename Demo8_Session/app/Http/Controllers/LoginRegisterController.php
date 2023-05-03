<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;

class LoginRegisterController extends Controller
{
    function stuRegView(){
        return view("register");
    }

    function stuReg(Request $req){
        $reg = new Register();

        $reg->name = $req["name"];
        $reg->username = $req["username"];
        $reg->email = $req["email"];
        $reg->password = $req["password"];
        if($reg->save()){
            session()->flash("success", "Register Successfully");
            return redirect(route("name_register_view"));
            // return redirect()->route("name_register_view")->with("success", "ok hai");
        }
        
    }

    function studentLoginView(){
        if(session("login_status") == true){
            return redirect()->route("name_dashboard_view");
        }
        return view("login");
    }

    function studentLogin(Request $req){
        $email = $req["email"];
        $pass = $req["password"];

        $user_login = Register::where(["email"=>$email, "password"=>$pass])->first();
        if($user_login){
            if($email == $user_login["email"] && $pass == $user_login["password"]){
                session()->put("login_status", true);
                session()->put("loggedin_user_email", $user_login["email"]);
                session()->put("loggedin_username", $user_login["username"]);
                return redirect()->route("name_dashboard_view")->with("success", "Login Successfully");
            }
        }else{
            return redirect()->route("name_login_view")->with("error", "Invalid Email or Password");
        }

        // $user_login = Register::where(["email"=>$email, "password"=>$pass])->get();
        // return $user_login;
    }


}
