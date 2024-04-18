<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/docs', function () {
    return redirect('docs/' . config('aui.latest-version'));
})->name('docs');
