<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Batche;
use Nette\Utils\Strings;
use Ramsey\Uuid\Type\Integer;

class StudentController extends Controller
{
    function data(){
        // $data = Student::find(3)->batche;
        $data = Student::with("batche")->find(2);
        // $data = Student::find(1);
        return $data;
    }


}
