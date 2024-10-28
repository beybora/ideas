<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TermsController
{
    public function index() {
        return view("terms");
    }
}
