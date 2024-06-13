<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IdeasController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('ideas.index');
Route::get('/login', [AuthController::class, 'login'])->name('login');

Route::resource('users', UserController::class)->only(['show', 'index', 'create'])->middleware('auth');
Route::resource('ideas', IdeasController::class)->except(['index', 'create'])->middleware('auth');
Route::resource('ideas.comments', CommentController::class)->only('store')->middleware('auth');
