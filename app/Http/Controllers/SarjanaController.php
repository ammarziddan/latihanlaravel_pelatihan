<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SarjanaController extends Controller
{
    public function index($alas)
    {
        // mendefinisikan dan mengisi variabel
        $tinggi = 10;
        $hasil = $alas * $tinggi / 2;
        $satuan = "m^2";

        echo $hasil." ".$satuan;
        echo "<br>";

        if($hasil > 100){
            echo "besar";
        } else {
            echo "kecil";
        }
        // echo $nomor_1;
        // echo "Sarjana Ilmu Kelautan";
    }
}

