<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IdeasController;
use App\Http\Controllers\TermsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/terms', [TermsController::class, 'index']);

Route::post('/ideas', [IdeasController::class, 'store'])->name('ideas.create');

Route::delete('/ideas/{idea}', [IdeasController::class, 'destroy'])->name('ideas.destroy');

Route::get(('/ideas/{idea}'), [IdeasController::class, 'show'])->name('ideas.show');

Route::get('/ideas/{idea}/edit', [IdeasController::class, 'edit'])->name('ideas.edit');

Route::put('/ideas/{idea}', [IdeasController::class, 'update'])->name('ideas.update');
