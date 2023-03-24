<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [\App\Http\Controllers\IndexController::class,'index']);
Route::get('/a-propos', [\App\Http\Controllers\AproposController::class,'index'])->name('a-propos');
Route::get('/comment/{id}', [\App\Http\Controllers\IndexController::class,'details'])->name('details');
Route::get('/delete/{id}', [\App\Http\Controllers\IndexController::class,'deleteComment'])->name('delete');
Route::get('/a-propos', [\App\Http\Controllers\AproposController::class,'index'])->name('a-propos');
Route::get('/service', [\App\Http\Controllers\ServiceController::class,'index'])->name('service');
Route::get('/contact', [\App\Http\Controllers\ContactController::class,'index'])->name('contact');
Route::get('/signup', [\App\Http\Controllers\SignupController::class,'index'])->name('signup');
Route::get('/login', [\App\Http\Controllers\LoginController::class,'index'])->name('login');

