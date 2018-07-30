<?php
use App\Tarif;

if( ! function_exists('list_menu') ){
    function list_menu()
    {
        return App\Menu::where('parent_id', 0)->get();
    }
}


if( ! function_exists('list_submenu') ){
    function list_submenu()
    {
        return App\Menu::whereNotIn('parent_id', [0])->get();
    }
}

if ( ! function_exists('tarif')) {
    function tarif($bank, $produk, $kategori, $masa, $cov_b, $cov_p){
        $tabel = Tarif::where([
            ['bank', $bank],
            ['produk', $produk],
            ['kategori', $kategori],
            ['jwk', '>', $masa]
        ])->first();

        $tarif = $cov_p / $cov_b * $tabel->premi;

        return $tarif;
    }
}
