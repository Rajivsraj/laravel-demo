<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StuLogin;

class LoginRegisterController extends Controller
{
    function login_view(){
        return view("login");
    }

    function login(Request $req){
        $email = $req["email"];
        $password = $req["password"];
        $login_detail = StuLogin::where(["email"=> $email, "password"=>$password])->first();
        if($login_detail){
            session(["l_email"=>$email, "l_pass"=>$password, "l_username"=>$login_detail->username]);
            return redirect()->route("name_dashboard_view")->with("success", "Loggedin Successfully");
        }
        return redirect()->route("name_login_view");
    }

    function register_view(){
        return view("register");
    }

    function register(Request $req){
        $name = $req["name"];
        $username = $req["username"];
        $email = $req["email"];
        $password = $req["password"];
        
        $reg = new StuLogin();
        $reg->name = $name;
        $reg->username = $username;
        $reg->email = $email;
        $reg->password = $password;
        $reg->save();
        
        // return redirect()->route("name_register_view");
        return redirect()->route("name_register_view")->with("success", "Successfully Registered");
    }

    
    

    function allStudents(){
        $all = StuLogin::all();
        return $all;
    }
}
