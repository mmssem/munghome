<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\IndexController;

Route::get('/', [PostController::class, 'index']);

Route::get('/view', [IndexController::class, 'index']);
