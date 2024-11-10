<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IdeaController;
use App\Http\Controllers\TermsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/terms', [TermsController::class, 'index']);

Route::post('/idea', [IdeaController::class, 'store'])->name('idea.create');

Route::delete('/idea/{id}', [IdeaController::class, 'destroy'])->name('idea.destroy');
