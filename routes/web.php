<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\PriceController;
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


Route::get('/', function () {return view('homepage');})->name('home');
Route::get('/planePage', [PriceController::class,'ShowPlane'])->name('plane');
Route::get('/payment/{id}', [PriceController::class,'PaymentPlaneShow'])->name('payment');
Route::post('/payment/{id}', [PriceController::class,'PaymentPlane'])->name('payments');
Route::get('/Eventpayment/{id}', [PriceController::class,'showCard'])->name('Eventpayments');
Route::post('/Eventpayment/{id}', [PriceController::class,'EventPayment'])->name('Eventspayments');

Route::get('login', [AuthController::class,'index'])->name('login');
Route::post('login', [AuthController::class,'login'])->name('login');
Route::get('logout', [AuthController::class,'Logout'])->name('logout');
Route::get('SingUp', [AuthController::class,'Registartion_View'])->name('register');
Route::post('SingUp', [AuthController::class,'Registartion'])->name('register');
Route::get('ChangePassword', [AuthController::class,'ChangePassword_View'])->name('ChangePassword');
Route::post('ChangePassword', [AuthController::class,'ChangePassword'])->name('ChangePassword');
Route::get('forgotPassword', [AuthController::class,'ForgotPassword_View'])->name('forgotPassword');
Route::get('updateProfile', [AuthController::class,'updateProfile'])->name('updateProfile');
Route::post('updateProfile', [AuthController::class,'updateProfileDone'])->name('updateProfileDone');


Route::get('create-events',[EventController::class,'CreateEventShow']);
Route::post('create-events',[EventController::class,'CreateEvent'])->name('create-events');
Route::get('eventDetails/{id}',[EventController::class,'EventDetails']);
Route::get('deleteEvent/{id}',[EventController::class,'deletEvent'])->name('delete-events');

Route::get('updateEvent/{id}',[EventController::class,'updateEventShow'])->name('update-events');
Route::post('updateEvent/{id}',[EventController::class,'updateEvent'])->name('update-events');
Route::get('dashboard',[AuthController::class,'DashboardShow'])->name('dashboard');
