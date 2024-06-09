<?php

namespace App\Http\Controllers;

use App\Models\Ideas;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', ['ideas' => Ideas::orderBy('id', 'desc')->cursorPaginate(2)]);
    }
}
