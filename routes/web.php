<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FoodScheduleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TestimonialsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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


// Route::resource('/Home', HomeController::class);
Route::get('/', [HomeController::class ,'Home'])->name('Home');
Route::get('/Home', [HomeController::class ,'Home'])->name('Home');
Route::get('/Contact', [HomeController::class ,'Contact'])->name('Contact');
Route::get('/Product', [HomeController::class ,'Product'])->name('Product');
// Auth::routes();

Route::resource('/Admin',AdminController::class);
Route::resource('/Price',PriceController::class);
Route::resource('/Payment',PaymentController::class);
Route::resource('/Menu',MenuController::class);
Route::resource('/FoodSchedule',FoodScheduleController::class);
Route::resource('/Testimonials',TestimonialsController::class);

Route::resource('/MyProfile', ProfileController::class);
Route::get('/Package',[ProfileController::class ,'Package'])->name('Package');
Route::get('/DetailPayment',[ProfileController::class ,'DetailPayment'])->name('DetailPayment');
Route::post('/DonePayment', [ProfileController::class, 'DonePayment'])->name('DonePayment');
Route::get('/EditMenu',[ProfileController::class ,'EditMenu'])->name('EditMenu');
Route::get('/EditProfile',[ProfileController::class ,'EditProfile'])->name('EditProfile');

Auth::routes();



