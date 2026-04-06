<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

//Rotas do site
Route::get('/', [SiteController::class, 'home'])->name('home');
Route::get('/sobre', [SiteController::class, 'sobre'])->name('sobre');
Route::get('/contato', [SiteController::class, 'contato'])->name('contato');
Route::get('/produtos', [SiteController::class, 'produtos'])->name('produtos');
Route::get('/produtos/detalhes', [SiteController::class, 'detalhesProduto'])->name('detalhes-produto');
Route::get('/carrinho', [SiteController::class, 'carrinho'])->name('carrinho');
Route::get('/checkout', [SiteController::class, 'checkout'])->name('checkout');

//Rotas de login
