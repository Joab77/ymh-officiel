<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Front/Home');
})->name('home');
Route::get('/about-us', function () {
    return Inertia::render('Front/AboutUs');
})->name('about-us');
Route::get('/contact-us', function () {
    return Inertia::render('Front/ContactUs');
})->name('contact-us');
Route::get('/item-detail', function () {
    return Inertia::render('Front/Item/Detail');
})->name('item-detail');

Route::get('/login', function () {
    return Inertia::render('Auth/Login', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});


Route::get('/admin/dashboard', function () {
    return Inertia::render('Back/Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
