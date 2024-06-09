<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IdeasController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('idea.getAll');

Route::post('/ideas', [IdeasController::class, 'store'])->name('idea.createOne');
