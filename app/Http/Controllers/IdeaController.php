<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;

class IdeaController
{
    public function store() {

        $idea = new Idea([
            'content' => request()->get('idea','')
        ]);
        $idea->save();
        return redirect()->route('dashboard');
    }
}
