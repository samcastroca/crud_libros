<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;

Route::get('/books',[BookController::class,'index'])->name('books.index');
Route::get('/books/{id}',[BookController::class,'edit'])->name('books.edit');
Route::post('/books',[BookController::class,'store'])->name('books.store');
Route::put('/books/{id}',[BookController::class,'update'])->name('books.update');
Route::delete('/books/{id}',[BookController::class,'destroy'])->name('books.destroy');

Route::get('/categories',[CategoryController::class,'index'])->name('categories.index');
Route::get('/categories/{id}',[CategoryController::class,'edit'])->name('categories.edit');
Route::post('/categories',[CategoryController::class,'store'])->name('categories.store');
Route::put('/categories/{id}',[CategoryController::class,'update'])->name('categories.update');
Route::delete('/categories/{id}',[CategoryController::class,'destroy'])->name('categories.destroy');

