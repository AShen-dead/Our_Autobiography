<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test', function () {
    return view('test.index');
});

Route::get('/testing', function () {
    return view('test.testing');
});

Route::get('/layout', function () {
    return view('components.layout');
});

Route::get('/test', function () {
    return view('test.index');
})->name('test.index');

Route::get('/test', function () {
    return view('test.Jake');
})->name('test.index');
