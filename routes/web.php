<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

//Rotas do site
Route::get('/', [SiteController::class, 'home'])->name('home');
Route::get('/produtos', [SiteController::class, 'produtos'])->name('produtos');
