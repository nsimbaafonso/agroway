<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    //home
    public function home() {
        return view("site.home");
    }

    //sobre
    public function sobre() {
        return view("site.sobre");
    }

    //contato
    public function contato() {
        return view("site.contato");
    }

    //produtos
    public function produtos() {
        return view("site.produtos");
    }

    //detalhes do produtos
    public function detalhesProduto() {
        return view("site.produto-detalhes");
    }

    //carrinho de compras
    public function carrinho() {
        return view("site.carrinho");
    }

    //checkout
    public function checkout() {
        return view("site.checkout");
    }
}
