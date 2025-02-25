<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

//商品一覧ページのルート
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
