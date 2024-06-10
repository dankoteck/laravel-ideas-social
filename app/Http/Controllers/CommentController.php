<?php

namespace App\Http\Controllers;

use App\Models\Ideas;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Ideas $id)
    {
        request()->validate([
            'comment' => 'required'
        ]);

        $id->comments()->create([
            'content' => request()->get('comment')
        ]);
        $id->save();

        return redirect()->route('idea.show', $id);
    }
}
