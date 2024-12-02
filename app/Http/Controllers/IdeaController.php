<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;

class IdeaController
{
    public function store()
    {
        request()->validate([
            'content' => 'required|min:5|max:255',
        ]);

        $idea = new Idea([
            'content' => request()->get('content', ''),
        ]);
        $idea->save();
        return redirect()->route('dashboard')->with('success', 'Idea created succesfully!');
    }

    public function destroy($id)
    {
        $idea = Idea::where('id', $id)->firstOrFail()->delete();

        return redirect()->route('dashboard')->with('success', 'Idea deleted succesfully!');
    }

    public function show(Idea $idea)
    {
        return view('ideas.show', [
            'idea' => $idea,
        ]);
    }

    public function edit(Idea $idea)
    {
        $editing = true;

        return view('ideas.show', compact('editing', 'idea'));
    }

    public function update(Idea $idea)
    {
        request()->validate([
            'content' => 'required|min:5|max:255',
        ]);

        $idea->content = request()->get('content', '');
        $idea->save();

        return redirect()
            ->route('ideas.show', $idea->id)
            ->with('success', 'Idea updated succesfully!');
    }
}
