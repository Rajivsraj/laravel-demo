<?php

use Illuminate\Support\Facades\Route;
use App\Models\staff;
use App\Http\Controllers\StaffController;

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

// Route::get("staff-list", function(){
//     $all_staff = new staff();
//     $ok = $all_staff->all();
//     echo "<pre>";
//     print_r($ok->toArray());
//     echo "</pre>";

// });

Route::view("add-staff", "staff");
Route::get("staff", [StaffController::class, "StaffDetails"]);
Route::post("save-staff", [StaffController::class, "saveStaff"]);
