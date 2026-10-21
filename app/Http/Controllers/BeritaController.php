<?php

namespace App\Http\Controllers;

use App\Models\Berita;

use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function tampildata()
    {
         return view('berita', [
        "title" => "Berita",
        "beritas" => Berita::all()
    ]);


    }

    public static function tampilberitatunggal($slug)
    {
        $beritas = Berita::all();

        $singlenews = [];

        foreach($beritas as $berita){
            if($berita["slug"] === $slug)
            {
                $singlenews = $berita;
            }
        }

        return view('beritatunggal', [
            "title" => $singlenews["judul"],
            "singlenews" => $singlenews,
        ]);
    }
}
