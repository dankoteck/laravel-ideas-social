<?php

namespace App\Http\Controllers;

use App\Models\Ideas;

class IdeasController extends Controller
{
    public function store()
    {
        $validated = request()->validate([
            'title' => 'required|min:1|max:10',
            'description' => 'required|min:1|max:20'
        ]);

        $validated['user_id'] = auth()->id();

        Ideas::create($validated);

        return redirect()->route('ideas.index')->with('success', 'Idea created successfully');
    }

    public function show(Ideas $idea)
    {
        return view('detail', compact('idea'));
    }

    public function edit(Ideas $idea)
    {
        return view('edit', compact('idea'));
    }

    public function update(Ideas $idea)
    {
        $validated = request()->validate([
            'title' => 'required|min:1|max:10',
            'description' => 'required|min:1|max:20'
        ]);
        $idea->update($validated);

        return redirect()->route('ideas.show', $idea)->with('updated_success', 'Idea updated successfully');
    }

    public function destroy(Ideas $idea)
    {
        $idea->delete();

        return redirect()->route('ideas.index')->with('success', 'Idea deleted successfully');
    }
}
