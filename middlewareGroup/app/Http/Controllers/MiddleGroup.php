<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MiddleGroup extends Controller
{
    function login(){
        session()->put('status', "true");
        echo "login done";
    }
    function one(){
        return view("one");
    }
    function two(){
        return view("two");
    }
    function three(){
        return view("three");
    }
    function logout(){
        session()->flush();
        return view("one");
    }   
}
