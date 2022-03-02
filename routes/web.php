<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


//Route::get('/', [ProductController::class, 'index'])->name('add-product');
Route::get('/', [ProductController::class, 'js'])->name('js');
