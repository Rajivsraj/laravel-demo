<?php

use Illuminate\Support\Facades\Route;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get("/", [StaffController::class, "addStudent"]);
Route::post("/save", [StaffController::class, "saveRecord"]);
Route::get("skldkfhjklsdhfkl", [StaffController::class, "staffList"])->name("staff_list_link");
Route::get("delete-staff/{id}", [StaffController::class, "deleteStaff"]);