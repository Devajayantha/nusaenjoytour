<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\DashboardController;
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
Route::get('/package/halfday/east', [PagesController::class, 'halfdayeast'])->name('halfdayeast');
Route::get('/package/halfday/snor', [PagesController::class, 'halfdaysnor'])->name('halfdaysnor');
Route::get('/package/1d1n', [PagesController::class, 'onedayonenight'])->name('onedayonenight');
Route::get('/package/1d1n/snor', [PagesController::class, 'onedayonenightsnor'])->name('onedayonenightsnor');
Route::get('/package/2d1n', [PagesController::class, 'twodayonenight'])->name('twodayonenight');
Route::get('/package/2d1n/snor', [PagesController::class, 'twodayonenightsnor'])->name('twodayonenightsnor');
Route::get('/package/3d2n', [PagesController::class, 'threedaytwonight'])->name('threedaytwonight');

Route::get('/booking', [BookingController::class, 'index'])->name('booking');
Route::post('/booking', [BookingController::class, 'booking'])->name('form-booking');
Route::get('/ajax-subpac', [BookingController::class, 'ajax'])->name('ajax-subpac');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware(['auth:sanctum', 'verified']);
Route::get('/dashboard/comment', [DashboardController::class, 'comment'])->name('dashboard.comment')->middleware(['auth:sanctum', 'verified']);
Route::put('/dashboard/comment/verify/{comment:id}', [DashboardController::class, 'verify'])->name('dashboard.comment.verify')->middleware(['auth:sanctum', 'verified']);
Route::put('/dashboard/comment/unferify/{comment:id}', [DashboardController::class, 'unverify'])->name('dashboard.comment.unverify')->middleware(['auth:sanctum', 'verified']);
Route::post('/dashboard/comment/create', [DashboardController::class, 'create'])->name('dashboard.comment.create');
// Route::get('/dashboard/package', [DashboardController::class, 'package'])->name('dashboard.package')->middleware(['auth:sanctum', 'verified']);


// Auth::routes();
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');
