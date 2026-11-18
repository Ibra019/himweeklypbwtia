<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\MahasiswaController;
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

Route::get('/contact', function () {
    return view('contact', [
        "title" => "Contact",
    ]);
});


     

Route::get('/berita', [BeritaController::class, 'tampildata']);
   
// routing untuk handling 1 berita tunggal
Route::get('/berita/{slug}', [BeritaController::class, 'tampilberitatunggal']);

Route::get('/datamahasiswa',[MahasiswaController::class,'index'])->name('datamahasiswa');