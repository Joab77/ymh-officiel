<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ItemController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


Route::prefix('/')->group(function () {
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

    Route::middleware('auth')->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });
});


Route::middleware(['auth', 'verified'])->prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Back/Dashboard');
    })->name('dashboard');

    Route::resource('items', ItemController::class);
    Route::resource('categories', CategoryController::class)->except(['create', 'edit', 'update', 'show']);
});

Route::middleware('guest')->group(function () {
    Route::get('/login', function () {
        return Inertia::render('Auth/Login');
    })->name('login');
});

Route::redirect('/admin', '/admin/dashboard');

require __DIR__.'/auth.php';

