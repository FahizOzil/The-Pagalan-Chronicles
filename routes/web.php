<?php

use App\Http\Controllers\SubscriberController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\WorldController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SubscribeController;

// Home Page
Route::get('/', [HomeController::class, 'index'])->name('home');

// Books Routes
Route::get('/books', [BooksController::class, 'index'])->name('books');
Route::get('/books/{slug}', [BooksController::class, 'show'])->name('books.show');
Route::get('/books/checkot', [BooksController::class, 'show'])->name('books.purchase');

// buy now
Route::get('/buy', [BooksController::class, 'buyNow'])->name('books.buy-now');

// World of Pagalan
Route::get('/world', [WorldController::class, 'index'])->name('world');
Route::get('/world/maps', [WorldController::class, 'maps'])->name('world.maps');
Route::get('/world/download/{map}', [WorldController::class, 'downloadMap'])->name('world.download');

// Author Page
Route::get('/author', [AuthorController::class, 'index'])->name('author');

// Contact Page
Route::view('/contact',  'contact')->name('contact');
Route::post('/contact', [ContactController::class, 'sendEmail'])->name('contact.submit');

// Subscribe Functionality
Route::post('/subscribe', [SubscriberController::class, 'subscribe'])->name('subscribe');




