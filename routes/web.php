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
Route::get('/contact', [FrontendController:: class, 'Communication'])->name('contact');
Route::get('/colabration', [FrontendController:: class, 'partnerDetails'])->name('colabration');
Route::get('/career-form', [FrontendController:: class, 'Career'])->name('carrerForm');
Route::get('/job-form', [FrontendController:: class, 'JobApplication'])->name('jobsForm');

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
require __DIR__.'/user.php';
