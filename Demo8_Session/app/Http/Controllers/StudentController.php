<?php

namespace App\Http\Controllers;
use App\Models\StudentDetail;

use Illuminate\Http\Request;

class StudentController extends Controller
{


    function home(){
        $all = StudentDetail::paginate(5);
        // $all = StudentDetail::simplePaginate(5);
        return view("home", ["data"=>$all]);
    }

    function about(){
        return view("about");
    }
}
