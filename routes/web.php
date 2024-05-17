<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'homepage'])->name('homepage');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

Route::get('/products', [ProductController::class, 'products'])->name('products');
Route::get('/products/details/{id}', [ProductController::class, 'details'])->name('details');
Route::get('/products/edit/{id}', [ProductController::class, 'edit'])->name('edit');
Route::get('/products/add', [ProductController::class, 'add'])->name('add');

