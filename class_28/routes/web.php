<?php

use App\Http\Controllers\BalanceController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::post('/balance/store', [BalanceController::class, 'store'])->name('balance.store');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    // Category Routes
    // Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
    // Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
    // Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
    // Route::get('/categories/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
    // Route::put('/categories/{category}', [CategoryController::class, 'update'])->name('categories.update');
    // Route::delete('/categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');

    Route::get('/categories/{category}/restore', [CategoryController::class, 'restore'])->name('categories.restore');
    Route::resource('categories', CategoryController::class);

});

require __DIR__.'/auth.php';
