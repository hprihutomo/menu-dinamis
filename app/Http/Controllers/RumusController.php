<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RumusController extends Controller
{
    public function lingkaran($a, $b)
    {
        // $hasil = $a * $b;

        return $a * $b;
    }
}
