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
    Route::get('/travel/create', [TravelController::class, 'create'])->name('travels.create');
    Route::get('/travel/{travel}/edit', [TravelController::class, 'edit'])->name('travels.edit');
    Route::post('/travel', [TravelController::class, 'store'])->name('travels.store');
    Route::put('/travel/{travel}', [TravelController::class, 'update'])->name('travels.update');
    Route::delete('/travel/{travel}', [TravelController::class, 'destroy'])->name('travels.destroy');
    Route::get('/day', [DayController::class, 'index'])->name('days');
    Route::get('/day/create', [DayController::class, 'create'])->name('days.create');
    Route::get('/day/{day}/edit', [DayController::class, 'edit'])->name('days.edit');
    Route::post('/day', [DayController::class, 'store'])->name('days.store');
    Route::put('/day/{day}', [DayController::class, 'update'])->name('days.update');
    Route::delete('/day/{day}', [DayController::class, 'destroy'])->name('days.destroy');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
