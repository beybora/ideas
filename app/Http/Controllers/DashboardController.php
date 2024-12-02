<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;

class DashboardController
{
    public function index()
    {
        dump(Idea::all());


        $ideas = Idea::orderBy('created_at','DESC');

        if (request()->has('search')) {
            $ideas = $ideas->where('content', 'like', '%' . request('search') . '%');
        }

        return view('dashboard', [
            'ideas' => $ideas->paginate(3),
        ]);
    }
}
