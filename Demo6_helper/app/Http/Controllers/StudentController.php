<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use PHPUnit\Framework\MockObject\Builder\Stub;

class StudentController extends Controller
{
    function saveStu(Request $req){
        pre_data($req->all());
        $obj = new Student();
        $obj->fname = $req->fname;
        $obj->email = $req->email;
        $obj->password = $req->password;
        $obj->phone_no = $req->ph_no;
        $obj->save();
    }

    function show_stu(){
        $all = Student::all();
        return view("stu-data", ["all_stu"=>$all]);
        
    }
}
