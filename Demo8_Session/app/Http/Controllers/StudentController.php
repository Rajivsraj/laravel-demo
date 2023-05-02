<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    function home(){
        return view("home");
    }

    function about(){
        return view("about");
    }
}
