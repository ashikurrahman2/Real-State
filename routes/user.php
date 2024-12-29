<?php

use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    // Profile route
    Route::get('/profile', [UserController::class, 'index'])->name('profile');
});
