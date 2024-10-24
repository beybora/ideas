<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController
{
    public function index() {
        return view("users.profile");
    }
}
