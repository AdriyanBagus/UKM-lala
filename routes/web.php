<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('pages/about');
});

Route::get('/contact', function () {
    return view('pages/contact');
});

Route::get('/forum', function () {
    return view('pages/forum');
});

Route::get('/rekomendasi', function () {
    return view('pages/rekomendasi');
});

Route::get('/recruitment', function () {
    return view('pages/recruitment');
});

Route::get('/padus', function () {
    return view('pages/padus');
});

