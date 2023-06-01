<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;

class TeacherController extends Controller
{
    function add_faculty(){
        $f = new Teacher();
        $f->f_name = "Mr. Rakesh";
        $f->save();

        // $sid = [1, 3, 5];   
        // $f->student()->attach($sid);    // will store in jucntion table
    }
}
