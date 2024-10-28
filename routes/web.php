<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TermsController;
use Illuminate\Support\Facades\Route;

Route::get('/',  [DashboardController::class, 'index']);

Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/terms', [TermsController::class, 'index']);

