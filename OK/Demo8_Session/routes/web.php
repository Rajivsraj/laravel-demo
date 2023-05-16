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

// Route::get("create_session/",function(){
//     // session()->put("ok", "data hai");
//     session()->put("loggedin_user_email", "hai");
//     echo "Session Created";
//     // return redirect()->route("name_login_view");
// });

Route::get("create_session/", [LoginRegisterController::class, "create_session"]);

Route::get("register/", [LoginRegisterController::class, "stuRegView"])->name("name_register_view");
Route::post("register/", [LoginRegisterController::class, "stuReg"])->name("name_register");

Route::get("/", [LoginRegisterController::class, "studentLoginView"])->name("name_login_view");
Route::post("/", [LoginRegisterController::class, "studentLogin"])->name("name_login");

// Route::get("/logut", function(){
//     if(session()->has("login_status")){
//         session()->flush();
//         return redirect(route("name_login_view"));
//     }else{

//     }
// })->name("name_logout");

Route::get("/admin",[DashboardController::class, "dashboard_view"])->name("name_dashboard_view");
Route::get("/admin/add-stu",[DashboardController::class, "about"])->name("name_dashboard_addstu");
Route::get("/admin/del-stu",[DashboardController::class, "about"])->name("name_dashboard_delstu");

Route::get("/showstudent", [StudentController::class, "showstudent_view"])->name("showstudent_password_view");
Route::get("/showstudent", [StudentController::class, "showstudent_get"])->name("showstudent_password_get");

Route::post("/addstudent", [StudentController::class, "addstudent_view"])->name("addstudent_password_get");
Route::post("/addstudent", [StudentController::class, "showstudent_info"])->name("addstudent_password_get");

Route::get('/delete/{id?}', [StudentController::class, 'delete']);
Route::get('/edit/{id?}', [StudentController::class, 'edit']);
Route::post('/save', [StudentController::class, 'save']);

Route::get("/change-password", [DashboardController::class, "change_password_view"])->name("name_change_password_view");
Route::post("/change-password", [DashboardController::class, "change_password"])->name("name_change_password");

Route::get("home",[StudentController::class, "home"])->name("name_homepage");
Route::get("/about",[StudentController::class, "about"])->name("name_about");



