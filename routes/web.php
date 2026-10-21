<?php

use App\Http\Controllers\BeritaController;
use App\Models\Berita;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;

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

Route::get('/contact', function () {
    return view('contact', [
        "title" => "Contact",
    ]);
});


     

Route::get('/berita', [BeritaController::class, 'tampildata']);
   
// routing untuk handling 1 berita tunggal
Route::get('/berita/{slug}', [BeritaController::class, 'tampilberitatunggal']);




