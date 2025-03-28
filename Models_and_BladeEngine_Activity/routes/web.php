<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

// Home route
Route::get('/', function () {
    return view('welcome');
});

// Route to display books
Route::get('/books', [BookController::class, 'index'])->name('books.index');

