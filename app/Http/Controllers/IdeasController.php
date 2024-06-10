<?php

namespace App\Http\Controllers;

use App\Models\Ideas;

class IdeasController extends Controller
{
    public function edit(Ideas $id)
    {
        return view('edit', ['idea' => $id]);
    }

    public function show(Ideas $id)
    {
        $id->comments()->orderBy('created_at', 'desc')->get();

        return view('detail', ['idea' => $id]);
    }

    public function store()
    {
        $validated = request()->validate([
            'title' => 'required|min:1|max:10',
            'description' => 'required|min:1|max:20'
        ]);
        Ideas::create($validated);

        return redirect()->route('idea.index')->with('success', 'Idea created successfully');
    }

    public function update(Ideas $id)
    {
        $validated = request()->validate([
            'title' => 'required|min:1|max:10',
            'description' => 'required|min:1|max:20'
        ]);
        $id->update($validated);

        return redirect()->route('idea.show', $id)->with('updated_success', 'Idea updated successfully');
    }

    public function destroy(Ideas $id)
    {
        $id->delete();

        return redirect()->route('idea.index')->with('success', 'Idea deleted successfully');
    }
}
