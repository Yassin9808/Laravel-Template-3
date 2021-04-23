<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('pages.index');
})->name('index');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/products', function () {
    return view('pages.products');
})->name('products');

Route::get('/store', function () {
    return view('pages.store');
})->name('store');