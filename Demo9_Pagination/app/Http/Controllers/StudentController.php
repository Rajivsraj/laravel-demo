<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    function home(){
        // $all = Student::all();
        $all = Student::paginate(10);
        
        // $nextCursor = $all->nextCursor();
        // $all = Student::simplePaginate(10);
        return view("welcome", ["data"=>$all]);
    }
}
