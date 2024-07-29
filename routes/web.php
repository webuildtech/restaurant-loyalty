<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\GiftCardController;
use App\Http\Controllers\LoyaltyProgramController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\QrCodeController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [DashboardController::class, 'index'])->name('home');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::middleware(['role:super-admin'])->group(function () {
        Route::resource('restaurants', RestaurantController::class);
        Route::resource('gift-cards', GiftCardController::class);
        Route::resource('loyalty-programs', LoyaltyProgramController::class);
    });

    Route::middleware(['role:employee'])->group(function () {
        Route::get('scan-qr', [QrCodeController::class, 'scan'])->name('scan-qr');
        // Add other employee specific routes here
    });
});
