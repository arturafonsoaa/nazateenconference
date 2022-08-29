<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Website\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('website.index');

Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function() {
    Route::get('', [DashboardController::class, 'index'])->name('index');
});
