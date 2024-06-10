<?php

namespace App\Http\Controllers;

use App\Models\Ideas;

class CommentController extends Controller
{
    public function store(Ideas $id)
    {
        $validated = request()->validate([
            'comment' => 'required'
        ]);

        $validated['idea_id'] = $id->id;
        $validated['user_id'] = auth()->id();
        $validated['content'] = $validated['comment'];

        $id->comments()->create($validated)->save();

        return redirect()->route('idea.show', $id);
    }
}
