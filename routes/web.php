<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\PagesController;
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

Route::get('/', [PagesController::class, 'home'])->name('home');
Route::get('/package', [PagesController::class, 'package'])->name('package');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');
Route::get('/gallery', [PagesController::class, 'gallery'])->name('gallery');

Route::get('/package/halfday/west', [PagesController::class, 'halfdaywest'])->name('halfdaywest');

Route::get('/booking', [BookingController::class, 'index'])->name('booking');
Route::get('/ajax-subpac', [BookingController::class, 'ajax'])->name('ajax-subpac');



// Auth::routes();
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');