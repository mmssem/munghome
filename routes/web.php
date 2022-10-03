<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\IndexController;

Route::get('/', [IndexController::class, 'index']);

Route::get('/view', [PostController::class, 'index']);
