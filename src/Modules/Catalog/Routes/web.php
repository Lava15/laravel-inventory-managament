<?php

use Illuminate\Support\Facades\Route;
use Modules\Catalog\Http\Controllers\CategoryController;
use Modules\Catalog\Http\Controllers\ProductsController;

Route::prefix( 'categories')->as( 'category:')->group(
    callback: function (): void {
        Route::get(uri: '/', action: [CategoryController::class, 'index'])->name(name: 'index');
    }
);
Route::prefix('products')->as('products:')->group(function () {
  Route::get('/', [ProductsController::class, 'index'])->name('index');
});
