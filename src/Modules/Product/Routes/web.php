<?php

use Illuminate\Support\Facades\Route;
use Modules\Product\Http\Controllers\ProductsController;

Route::prefix('products')->as('products:')->group(function () {
    Route::get('/', [ProductsController::class, 'index'])->name('index');
});
