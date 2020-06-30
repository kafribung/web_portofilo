<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // READ
    public function index()
    {
        return view('pages.home');
    }
}
