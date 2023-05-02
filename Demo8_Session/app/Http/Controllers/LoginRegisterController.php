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

    function studentLogin(Request $req){
        
    }
}
