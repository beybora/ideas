<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeedController
{
    public function index() {
        return view('feed');
    }
}
