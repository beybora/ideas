<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IdeaController;
use App\Http\Controllers\TermsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::group(['prefix' => 'ideas/', 'as' => 'ideas.'], function () {
    Route::post('', [IdeaController::class, 'store'])->name('create');

    Route::get('{idea}', [IdeaController::class, 'show'])->name('show');

    Route::group(['middleware' => ['auth']], function () {
        Route::get('{idea}/edit', [IdeaController::class, 'edit'])->name('edit');

        Route::put('{idea}', [IdeaController::class, 'update'])->name('update');

        Route::delete('{idea}', [IdeaController::class, 'destroy'])->name('destroy');

        Route::post('{idea}/comments', [CommentController::class, 'store'])->name('comments.store');
    });

    Route::get('/terms', [TermsController::class, 'index']);
});

Route::resource('users', UserController::class)->only('show', 'edit', 'update');

require __DIR__ . '/auth.php';
