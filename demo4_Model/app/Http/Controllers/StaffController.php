<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\staff;

class StaffController extends Controller
{
    function StaffDetails(){
        $all = new staff();
        $abc = $all->all();

        echo "<pre>";
        print_r($abc->toArray());
        echo "</pre>";
    }

    function saveStaff(Request $req){
       $save = new staff();

        $save->fname = $req["fname"];
        $save->lname = $req["lname"];
        $save->email = $req["email"];
        $save->password = $req["password"];
        $save->save();
    }
}
