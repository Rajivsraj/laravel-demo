<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LoginRegister;

class LoginRegController extends Controller
{
    function register(Request $req){
        $userReg = new LoginRegister();
        // $userReg->username = $req->input("username");
        $userReg->username = $req["username"];
        $userReg->email = $req["email"];
        $userReg->password = $req["password"];
        $userReg->save();
        return redirect("/login")->with("success","Register Successfully");
        // return redirect()->route("name_login")->with("msg", "Success");
    }

    function login(Request $req){
        $email = $req["email"];
        $pass = $req["password"];

        $user = LoginRegister::Where(['email'=>$email, "password"=>$pass])->first();
        
        if($user){
            session(["login_email"=>$user["email"]]);
            session(["login_username"=>$user["username"]]);
            return redirect(route("name_adminView"))->with("success", "Lggedin Successfully");
        }else{
           
            // return view("login")->with("err", "errrr");
            
            return redirect(route("name_login"))->with("error", "Invalid username or password");
        }
       
        // $singleUser = LoginRegister(->where("email",$email);
        
        // Dont use this
        // if($email == $user["email"]){
        //     if($pass == $user["pass"]){
        //         echo "success";
        //     }else{
        //         echo "Password Incorrect";
        //     }
        // }else{
        //     if($pass == $user["pass"]){
        //         echo "incorrect Email";
        //     }else{
        //         echo "incorrect Email and Password";
        //     }
        // }
       
    }

    function logout(){
        if(session("login_email")){
            session()->forget(["login_email","login_username"]);
            return redirect(route("name_login"))->with("success", "Logout Successfully");
        }
    }
}
