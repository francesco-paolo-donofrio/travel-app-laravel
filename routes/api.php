<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\TravelController;
use App\Http\Controllers\Api\DayController;

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

Route::get('/travel', [TravelController::class, 'index'])->name('travels');
Route::get('/day', [DayController::class, 'index'])->name('days');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
