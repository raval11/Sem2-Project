<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Models\Userdata;

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
    return view('homepage');
})->name('home');

Route::get('login', [AuthController::class,'index'])->name('login');
Route::post('login', [AuthController::class,'login'])->name('login');
Route::get('SingUp', [AuthController::class,'Registartion_View'])->name('register');
Route::post('SingUp', [AuthController::class,'Registartion'])->name('register');
Route::get('ChangePassword', [AuthController::class,'ChangePassword_View'])->name('ChangePassword');
Route::post('ChangePassword', [AuthController::class,'ChangePassword'])->name('ChangePassword');
Route::get('forgotPassword', [AuthController::class,'ForgotPassword_View'])->name('forgotPassword');
Route::post('forgotPassword', [AuthController::class,'ForgotPassword'])->name('forgotPassword');
