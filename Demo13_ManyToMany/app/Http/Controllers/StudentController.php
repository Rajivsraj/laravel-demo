<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    function add_student(){
        $stu = new Student();
        $stu->stu_name = "Ajay";
        $stu->save();
    }
}
