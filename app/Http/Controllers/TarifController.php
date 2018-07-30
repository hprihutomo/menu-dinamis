<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TarifController extends Controller
{
    public function index()
    {
        $bank = 'BPD';
        $produk = 'UMKM';
        $kategori = 'UMUM';
        $masa = 2;
        $cov_p = 75;
        $cov_b = 75;

        $tarif = tarif($bank, $produk, $kategori, $masa, $cov_b, $cov_p);

        return view('menu.index', compact('tarif'));
    }
}
