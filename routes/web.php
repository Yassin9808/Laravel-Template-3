<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    $currentPage = 'index';
    return view('pages.index', compact('currentPage'));
})->name('index');

Route::get('/about', function () {
    $currentPage = 'about';
    return view('pages.about', compact('currentPage'));
})->name('about');

Route::get('/products', function () {
    $currentPage = 'products';
    return view('pages.products', compact('currentPage'));
})->name('products');

Route::get('/store', function () {
    $currentPage = 'store';
    return view('pages.store', compact('currentPage'));
})->name('store');