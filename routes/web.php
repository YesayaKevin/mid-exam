<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\PublisherController;
use App\Http\Controllers\BookCategoryController;

Route::get('/', [BookController::class, 'index'])->name('index');
Route::get('books/{id}', [BookController::class, 'find'])->name('detail');
Route::get('/publisher', [PublisherController::class, 'index'])->name('publisher');
Route::get('publisher/{id}', [PublisherController::class, 'find'])->name('publisherDetail');
Route::get('/contact', function(){return view('contact');})->name('contact');
Route::get('category/{id}', [BookCategoryController::class, 'find'])->name('category');
