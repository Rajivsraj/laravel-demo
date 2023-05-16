<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

Route::get("one/", [StudentController::class, "one"]);
Route::get("two/", [StudentController::class, "two"]);
Route::get("three/", [StudentController::class, "three"]);
Route::get("four/", [StudentController::class, "four"]);
Route::get("cant-access/", [StudentController::class, "permit"]);


Route::get('rm_session/', function () {
    session()->flush();
    echo "removed";
    // return redirect("/one");
});