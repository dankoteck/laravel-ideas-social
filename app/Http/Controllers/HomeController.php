<?php

namespace App\Http\Controllers;

use App\Models\Ideas;

class HomeController extends Controller
{
    public function index()
    {
        $ideas = Ideas::orderBy('created_at', 'desc');

        if (request()->has('search')) {
            $ideas = $ideas->where('description', 'like', request()->get('search'));
        }

        return view('home', ['ideas' => $ideas->paginate(2)]);
    }
}
