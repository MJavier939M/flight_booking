<?php

use App\Http\Controllers\FlightController;
use App\Http\Controllers\ProfileController;
use App\Models\Reservation;
use Illuminate\Support\Facades\Route;

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
});

Route::get('/flights',[FlightController::class, 'index'])->middleware(['auth','verified'])->name('flights.index');
Route::delete('/flights/{id}',[FlightController::class,'destroy'])->middleware(['auth','verified'])->name('flights.destroy');
Route::get('/reservas',[FlightController::class,'reservas'])->middleware(['auth','verified'])->name('flights.reservas');
Route::post('/reservas',[FlightController::class,'create'])->middleware(['auth','verified'])->name('flights.create');
require __DIR__.'/auth.php';
