<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get("/dashboard", function(){
    return view("admin/dashboard");
});


Route::get("/add-admin", function(){
    return view("admin/add");
});

Route::get("/add-user", function(){
    return view("user/add");
});

Route::get('/homepage', function () {
    return view('home');
});


// Route::get('/about/{name}', function ($name) {
//     return $name;
// });

Route::view("/short-about", "about");

// Route::get('/about', function () {
//     return view('about', ["name"=>"mohan", "age"=>30]);
// });


Route::get('/about/{name}/{age}', function ($name, $age) {
    return view('about', ["name"=>$name, "age"=>$age]);
});


Route::fallback(function(){
    echo "<h1>not found page</h1>";
});