<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;

class DashboardController
{
    public function index()
    {
        $idea = new Idea([
            'content' => 'Dummy content, this is a dummy content, this is what it is - a dummy content.',
        ]);
        $idea->save();

        dump(Idea::all());
        return view('dashboard', [
            'ideas' => Idea::orderBy('created_at','DESC')->get(),
        ]);
    }
}
