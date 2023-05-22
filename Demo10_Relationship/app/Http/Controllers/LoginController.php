<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Login;

class LoginController extends Controller
{
    function AllUsers(){
        // $allusers = Login::all();
        // $allusers = Login::find(3);
        // $allusers = Login::find(1)->getUserDetails;
        $allusers = Login::with("getUserDetails")->find(1);
        return $allusers;
    }
}
