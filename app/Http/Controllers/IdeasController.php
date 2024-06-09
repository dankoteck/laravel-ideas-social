<?php

namespace App\Http\Controllers;

use App\Models\Ideas;

class IdeasController extends Controller
{
    public function store()
    {
        request()->validate([
            'title' => 'required|min:5|max:10',
            'description' => 'required|min:10|max:20'
        ]);


        Ideas::create([
            'title' => request()->get('title'),
            'description' => request()->get('description', '')
        ]);

        return redirect()->route('idea.getAll')->with('success', 'Idea created successfully');
    }
}
