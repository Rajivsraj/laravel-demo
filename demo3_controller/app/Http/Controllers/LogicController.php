<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogicController extends Controller
{
    // function stuDetails(){
    //     // echo "hello raja babu";
    //     return "hello raja babu return";
    // }

    // Passing the parameters
    // function stuDetails($name){
    //     // echo "hello raja babu";
    //     return "hello $name return";
    // }

    // pass view using controller
    // function stuDetails(){
    //     return view("student");
    // }

     // pass view using controller and pass the params in function
    function stuDetails($name){

        return view("student", ["name"=>$name]);
    }

    function ok($var){
        return "hello 2nd fun $var";
    }
}
