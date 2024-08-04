<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\TravelController;
use App\Http\Controllers\Admin\DayController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');


Route::middleware(['auth', 'verified'])->name('admin.')->prefix('admin')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
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
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::fallback(function () {
    return redirect()->route('admin.dashboard');
});
