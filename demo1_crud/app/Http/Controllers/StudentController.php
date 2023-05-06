<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    function stu_list_view(){
        return view("stu-list");
    }


    function add_stu_view(){
        return view("add-stu");
    }
}
