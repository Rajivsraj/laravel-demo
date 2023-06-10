<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    function post_list(){
        return view("post");
    }

    function add_post(Request $req){
        $user = $req->user(); // Model user object
        // $user = Auth::user(); // Model user object
        // $user = new User;
        $post = new Post;
        $post->title = $req->title;
        $post->description = $req->desc;
        $post->status = $req->status;
        
        $user->post()->save($post);
        return redirect(route("dashboard"));
    }
}
