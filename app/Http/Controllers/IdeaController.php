<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;

class IdeaController
{
    public function store() {

        request()->validate([
            'idea' => 'required|min:5|max:255'
        ] );

        $idea = new Idea([
            'content' => request()->get('idea','')
        ]);
        $idea->save();
        return redirect()->route('dashboard')->with('success', 'Idea created succesfully!');
    }

    public function destroy($id) {

        $idea = Idea::where('id', $id)->first();
        $idea->delete();

        return redirect()->route('dashboard')->with('success', 'Idea deleted succesfully!');
    }
}
