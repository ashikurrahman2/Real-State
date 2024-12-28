<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
// Website route
Route::get('/', [FrontendController:: class, 'index'])->name('index');
Route::get('/about', [FrontendController:: class, 'About'])->name('about');
Route::get('/property-details', [FrontendController:: class, 'Pdetails'])->name('property');
Route::get('/property-list', [FrontendController:: class, 'Plist'])->name('propertylist');
Route::get('/login', [FrontendController:: class, 'Ulogin'])->name('login');
Route::get('/contact', [FrontendController:: class, 'Communication'])->name('contact');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

require __DIR__.'/admin-auth.php';
require __DIR__.'/admin-dashboard.php';
