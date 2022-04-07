<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::resource('buku',BookController::class);
Route::get('/', [BookController::class, 'index']);
