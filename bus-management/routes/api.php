<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\BusController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\ScheduleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::apiResource('/buses', BusController::class);
Route::apiResource('routes', RouteController::class);
Route::apiResource('schedules', ScheduleController::class);
Route::apiResource('bookings', BookingController::class);

