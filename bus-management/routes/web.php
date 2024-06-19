<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BusController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\ScheduleController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::post('/buses',[BusController::class, 'store'])->name('buses.store');
    Route::get('/buses', [BusController::class, 'edit'])->name('buses.edit');
    Route::patch('/buses', [BusController::class, 'update'])->name('buses.update');
    Route::delete('/buses', [BusController::class, 'destroy'])->name('buses.destroy');


    Route::resource('buses', BusController::class);
    Route::resource('routes', RouteController::class);
    Route::resource('schedules', ScheduleController::class);
    Route::resource('bookings', BookingController::class);
});

require __DIR__.'/auth.php';
