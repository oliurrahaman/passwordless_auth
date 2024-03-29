<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\LoginController;

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

Route::get('auth/login',[LoginController::class,'index'])->name('auth.login');
Route::post('auth/login',[LoginController::class,'store']);
