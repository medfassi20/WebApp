<?php
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::resource('products', ProductController::class);
Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');