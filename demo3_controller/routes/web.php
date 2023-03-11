<?php

use Illuminate\Support\Facades\Route;

// User Controller
use App\Http\Controllers\LogicController;
use App\Http\Controllers\AnotherController;

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

// Seting route withour View
Route::get("about/", function(){
    // echo "about";
    return "about";
});

// Seting route with View -> resource -> view -> createfile
Route::get("homex/", function(){
    // return view("home", ["key"=>"value"]);
    $a = 10;
    $b = 20;
    return view("home", ["val1"=>$a, "val2"=>$b]);
});


Route::view("abc/", "home");

// Show string using controller
// Route::get("student/{name}", [LogicController::class, "stuDetails"]);

// passing view usin controller
// Route::get("student/", [LogicController::class, "stuDetails"]);

// Pass prams in controller functions views
Route::get("student/", [LogicController::class, "stuDetails"]);
Route::get("anotherfun/", [LogicController::class, "ok"]);
Route::get("{sf}/anotherfun/", [LogicController::class, "ok"]);


Route::get("xyz/", [AnotherController::class, "display"]);