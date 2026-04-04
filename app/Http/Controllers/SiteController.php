<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    //home
    public function home() {
        return view("site.home");
    }

    //produtos
    public function produtos() {
        return view("site.produtos");
    }
}
