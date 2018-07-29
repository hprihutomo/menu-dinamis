<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Menu;

class MenuController extends Controller
{
    public function index()
    {
        $menu = Menu::get();

        return view('menu.index', compact('menu'));
    }

    public function hasil()
    {
        $menu = list_menu();
        $list = list_submenu();

        return view('menu.hasil', compact('menu', 'list'));
    }
}
