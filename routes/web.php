<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

Route::get('/', [MainController::class, 'index'])->name('index');
Route::get('/about', [MainController::class, 'about'])->name('about');
Route::get('/contact', [MainController::class, 'contact'])->name('contact');
Route::get('basket', [MainController::class, 'basket'])->name('basket');

Route::get('/categories', [MainController::class, 'categories'])->name('categories');
Route::get('/{category}', [MainController::class, 'category'])->name('category');
// Route::get('/{category}/{product?}', [MainController::class, 'product'])->name('product');
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
