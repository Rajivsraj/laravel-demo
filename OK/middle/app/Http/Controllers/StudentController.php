<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    function one(){
       
        session()->put("one", "hi");
        session()->put("email", "email exists");
        return view("welcome");
    }

    function two(){
        echo "two ";
    }

    function three(){
        echo "three";
    }

    function four(){
        echo "four";
    }

    function permit(){
        echo "You can not access this page";
    }
}
