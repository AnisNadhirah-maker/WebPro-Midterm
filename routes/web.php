<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\SearchController; // Ensure SearchController is included

Route::get('/', function () {
    return view('welcome');
});

// Resource routes for authors
Route::resource('authors', AuthorController::class);

// Book routes
Route::get('books/create', [BookController::class, 'create'])->name('books.create');
Route::post('books/store', [BookController::class, 'store'])->name('books.store');
Route::delete('books/{bookId}', [BookController::class, 'destroy'])->name('books.destroy');

// Search routes
Route::get('books/search', [SearchController::class, 'search'])->name('books.search'); // Route for handling search
Route::get('search', [SearchController::class, 'showSearchForm'])->name('search.form'); // Optional: Route for a separate search form
Route::get('/search', [SearchController::class, 'search'])->name('books.search');