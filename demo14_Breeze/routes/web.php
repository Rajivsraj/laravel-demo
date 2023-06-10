<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AllRegisterUsersController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\DashboardController;


use GuzzleHttp\Middleware;

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

Route::get('/dashboard', [DashboardController::class, "post_list"])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get("all-user/", [AllRegisterUsersController::class, "all_user"]);

Route::get("staff/", [AllRegisterUsersController::class,"staff"])->middleware("auth")->name("staff");

Route::get("login-status/", [AllRegisterUsersController::class,"check_user_loggedin_or_not"])->name("lgoin-status-name");


Route::get("post/", [PostController::class, "post_list"])->name("list-post-name");
Route::post("post/", [PostController::class, "add_post"])->name("add-post-name");


require __DIR__.'/auth.php';
