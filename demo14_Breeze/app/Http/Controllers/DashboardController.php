<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class DashboardController extends Controller
{
    function post_list(){
        $posts = Post::all();
        
        return view("dashboard", ["posts"=>$posts]);
    }
}
