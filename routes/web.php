<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IdeasController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('ideas.index');
Route::get('/login', [AuthController::class, 'login'])->name('login');

Route::resource('ideas', IdeasController::class)->except(['index'])->middleware('auth');


// Route::group(['prefix' => '/ideas', 'as' => 'ideas.', 'middleware' => ['auth']], function () {
//     Route::post('/', [IdeasController::class, 'store'])->name('store');
//     Route::get('/{id}', [IdeasController::class, 'show'])->name('show');
//     Route::put('/{id}', [IdeasController::class, 'update'])->name('update');
//     Route::delete('/{id}', [IdeasController::class, 'destroy'])->name('destroy');
//     Route::get('/{id}/edit', [IdeasController::class, 'edit'])->name('edit');
//     Route::post('/{id}/comments', [CommentController::class, 'store'])->name('comments.store');
// });

Route::group(['as' => 'auth.'], function () {
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'store'])->name('store');
    Route::post('/login', [AuthController::class, 'index'])->name('index');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});
