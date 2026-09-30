<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home',[
        "title" => "Home",
    ]);
});

Route::get('/profile', function () {
    return view('profile', [
        "title" => "Profile",
        "name" => "Ibrahim",
        "nim" => "13242520019",
        "prodi" => "Teknologi Informasi",
        "gambar" => "images/LAs.jpg",
    ]);
});

Route::get('/berita', function () {
    return view('berita', [
        "title" => "Berita",
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        "title" => "Contact",
    ]);
});

Route::get('/news', function () {
    return view('news');
});