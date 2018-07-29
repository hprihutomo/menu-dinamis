<?php
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
