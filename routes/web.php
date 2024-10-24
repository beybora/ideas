<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FeedController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/',  [DashboardController::class, 'index']);

Route::get('/feed', [FeedController::class, 'index']);

Route::get('/profile', [ProfileController::class, 'index']);

