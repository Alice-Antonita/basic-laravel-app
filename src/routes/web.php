<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\BookController;

Route::controller(BookController::class)->group(function () {
    // Show/Sort/Search the list
    Route::get('/', 'index');

    // Add new book/author
    Route::post('/', 'store');

    // Delete a book
    Route::delete('/', 'destroy');

    // Export csv/xml
    Route::post('/export', 'export');
});