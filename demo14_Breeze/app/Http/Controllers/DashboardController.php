<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    function post_list(){
        // Usser wise post only
        $posts = Auth::user()->post;
        

        // All Posts
        // $posts = Post::all();
        return view("dashboard", ["posts"=>$posts]);
    }
}
