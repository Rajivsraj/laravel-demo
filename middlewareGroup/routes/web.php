<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MiddleGroup;
use App\Http\Middleware\MiddleOne;

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
Route::get('/login', [MiddleGroup::class, 'login']);
Route::get('/', function () {
    return view('welcome');
});

Route::get('/one',  [MiddleGroup::class, 'one'])->middleware("mymid");
Route::get('/two', [MiddleGroup::class, 'two'])->middleware('mymid');
Route::get('/three', [MiddleGroup::class, 'three'])->middleware("mymid");
Route::get('/logout', [MiddleGroup::class, 'logout']);