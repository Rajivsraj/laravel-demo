<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginRegisterController;
use App\Http\Controllers\DashboardController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::view("/abc", "login");
Route::get("/", [LoginRegisterController::class, "login_view"])->name("name_login_view");
Route::post("/", [LoginRegisterController::class, "login"])->name("name_login");
Route::get("/register", [LoginRegisterController::class, "register_view"])->name("name_register_view");
Route::post("/register", [LoginRegisterController::class, "register"])->name("name_register");
// Route::get("/all", [LoginRegisterController::class, "allStudents"])->name("name_all_stu");

Route::get("/dashboard", [DashboardController::class, "dashboard_view"])->name("name_dashboard_view");

// Student
Route::get("/add-student", [StudentController::class, "add_stu_view"])->name("name_student_add_view");
Route::get("/student-list", [StudentController::class, "stu_list_view"])->name("name_student_list_view");