<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IdeasController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

/** VIEWS */
Route::get('/', [HomeController::class, 'index'])->name('idea.index');

Route::get('/ideas/{id}', [IdeasController::class, 'show'])->name('idea.show');

Route::get('/ideas/{id}/edit', [IdeasController::class, 'edit'])->name('idea.edit');

Route::get('/register', [AuthController::class, 'register'])->name('auth.register');

Route::get('/login', [AuthController::class, 'login'])->name('auth.login');
/** VIEWS */


/** APIs */
Route::post('/ideas', [IdeasController::class, 'store'])->name('idea.store');

Route::put('/ideas/{id}', [IdeasController::class, 'update'])->name('idea.update');

Route::delete('/ideas/{id}', [IdeasController::class, 'destroy'])->name('idea.destroy');

Route::post('/ideas/{id}/comments', [CommentController::class, 'store'])->name('ideas.comments.store');

Route::post('/register', [AuthController::class, 'store'])->name('auth.store');

Route::post('/login', [AuthController::class, 'index'])->name('auth.index');

Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');
/** APIs */
