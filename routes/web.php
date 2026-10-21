<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/servicios', function () {
    return view('servicios');
})->name('servicios');

Route::get('/productos', function () {
    return view('productos');
})->name('productos');