<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginRegController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;


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

// Route::view("/", "login");
Route::view("/", "login")->name("name_loginView");

Route::view("/register", "register")->name("name_regisger_view");
Route::post("/register", [LoginRegController::class, "register"])->name("name_register");

Route::post("/", [LoginRegController::class, "login"])->name("name_login");
Route::get("/logout", [LoginRegController::class, "logout"])->name("name_logout");

// Route::get("/forgot-password", [LoginRegController::class, "passwordForgot"])->name("name_passwordForgotView");
Route::view("/forgot-password", "backend.forgot-password")->name("name_passwordForgotView");
Route::post("/forgot-password", [ForgotPasswordController::class, "forgotPassword"])->name("name_passwordForgot");

// CATEGORY
// Route::view("/category", "admin.category")->name("name_category_view");
Route::get("/category", [CategoryController::class, "main_cat_list"])->name("name_main_cat_list");
Route::post("/category", [CategoryController::class, "add_new_cat"])->name("name_add_new_cat");
Route::get("/category/{cat_id?}", [CategoryController::class, "edit_main_category"])->name("name_edit_main_category");

// Sub Category
Route::get("/subcategory", [SubCategoryController::class, "list_sub_category"])->name("name_list_sub_category");
Route::post("/subcategory", [SubCategoryController::class, "add_sub_category"])->name("name_add_sub_category");
Route::post("/subcategory{sub_cat_id?}", [SubCategoryController::class, "edit_sub_category"])->name("name_edit_sub_category");


// Admin
Route::get("/admin", [AdminController::class, "admin"])->name("name_adminView");
