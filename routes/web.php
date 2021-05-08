<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;

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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/prices', function () {
    return view('prices');
})->name('prices');

Route::middleware(['auth:sanctum', 'verified'])->get('/booking', function () {
    return view('booking');
})->name('booking');

Route::middleware(['auth:sanctum', 'verified'])->get('/contact', function () {
    return view('contact');
})->name('contact');

Route::resource('bookings', BookingController::class);
