<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FakultasController extends Controller
{
    public function index($namafakultas)
    {
        // dump($namafakultas);
        // melanjutkan script yg dibawahnya
        // dd($namafakultas);
        // tidak melanjutkan script yg dibawahnya
        // echo "Fakultas"." ".$namafakultas;
        // echo "Fakultas Perikanan dan Ilmu Kelautan";
        return view('fakultas', compact('namafakultas'));
    }
}
