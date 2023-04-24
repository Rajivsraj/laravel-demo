<?php

namespace App\Http\Controllers;
use App\Models\Student;

use Illuminate\Http\Request;

class stu_controller extends Controller
{
    function stu(Request $res){
        print_r($res->all());
        $req = new Student;
        $req->name = $res['name'];
        $req->password = $res['password'];
        $req->email = $res['email'];
        $req->save();
        echo "data submited";        
    }
}
