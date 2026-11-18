<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index()
    {
        $datas = Mahasiswa::all();

        return view('Mahasiswa', compact('datas'));
    }
}
