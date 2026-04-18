<?php

namespace App\Http\Controllers\Produtor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('produtor.dashboard');
    }
}
