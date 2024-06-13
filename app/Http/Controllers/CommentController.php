<?php

namespace App\Http\Controllers;

use App\Models\Ideas;

class CommentController extends Controller
{
    public function store(Ideas $idea)
    {
        $validated = request()->validate([
            'comment' => 'required'
        ]);

        $validated['idea_id'] = $idea->id;
        $validated['user_id'] = auth()->id();
        $validated['content'] = $validated['comment'];

        $idea->comments()->create($validated)->save();

        return redirect()->route('ideas.show', $idea);
    }
}
