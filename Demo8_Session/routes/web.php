<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\LoginRegisterController;
use App\Http\Controllers\DashboardController;

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


Route::get("register/", [LoginRegisterController::class, "stuRegView"])->name("name_register_view");
Route::post("register/", [LoginRegisterController::class, "stuReg"])->name("name_register");

Route::get("/", [LoginRegisterController::class, "studentLoginView"])->name("name_login_view");
Route::post("/", [LoginRegisterController::class, "studentLogin"])->name("name_login");

Route::get("/logut", function(){
    if(session()->has("login_status")){
        session()->flush();
        return redirect(route("name_login_view"));
    }else{

    }
})->name("name_logout");

Route::get("/dashboard",[DashboardController::class, "dashboard_view"])->name("name_dashboard_view");
Route::get("/dashboard/add-stu",[DashboardController::class, "about"])->name("name_dashboard_addstu");
Route::get("/dashboard/del-stu",[DashboardController::class, "about"])->name("name_dashboard_delstu");

Route::get("home",[StudentController::class, "home"])->name("name_homepage");
Route::get("/about",[StudentController::class, "about"])->name("name_about");
