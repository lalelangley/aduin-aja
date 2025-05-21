<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home'); // tampilan utama
});

Route::get('/about', function () {
    return view('about'); // ini untuk /about
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/blog1', function () {
    return view('blog1');
});
Route::get('/blog2', function () {
    return view('blog2');
});
Route::get('/blog3', function () {
    return view('blog3');
});
Route::get('/blog4', function () {
    return view('blog4');
});
Route::get('/blog5', function () {
    return view('blog5');
});
Route::get('/blog6', function () {
    return view('blog6');
});

Route::get('/dashUser', function () {
    return view('user.dashUser');
});

Route::get('/daftarUser', function () {
    return view('user.daftarUser');
});

Route::get('/tambahUser', function () {
    return view('user.tambahUser');
});

