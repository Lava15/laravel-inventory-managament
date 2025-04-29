<?php

use Illuminate\Support\Facades\Route;
use Modules\Catalog\Http\Controllers\CategoryController;

Route::prefix( 'categories')->as( 'category:')->group(
    callback: function (): void {
        Route::get(uri: '/', action: [CategoryController::class, 'index'])->name(name: 'index');
    }
);
