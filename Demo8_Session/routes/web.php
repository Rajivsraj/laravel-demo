<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\LoginRegisterController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view("/", "login")->name("name_login_view");
Route::get("register/", [LoginRegisterController::class, "stuRegView"])->name("name_register_view");
Route::post("register/", [LoginRegisterController::class, "stuReg"])->name("name_register");
Route::get("/dashboard",[StudentController::class, "about"])->name("name_dashboard");
Route::get("/dashboard/add-stu",[StudentController::class, "about"])->name("name_dashboard_addstu");
Route::get("/dashboard/del-stu",[StudentController::class, "about"])->name("name_dashboard_delstu");

Route::get("home",[StudentController::class, "home"])->name("name_homepage");
Route::get("/about",[StudentController::class, "about"])->name("name_about");
