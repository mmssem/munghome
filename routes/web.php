<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AdminPostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [IndexController::class, 'index']);
Route::get('/view', [PostController::class, 'index']);

//Route::get('/view2', function () {
//    return view('welcome');
//});

Route::get('/dashboard', [AdminPostController::class,'index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/dashboard/{post}/edit', [AdminPostController::class,'edit'])->middleware(['auth', 'verified']);
Route::patch('/dashboard/{post}', [AdminPostController::class,'update'])->middleware(['auth', 'verified']);
Route::delete('/dashboard/{post}', [AdminPostController::class,'destroy'])->middleware(['auth', 'verified']);

Route::get('/dashboard/create', [AdminPostController::class,'create'])->name('create');
Route::post('/dashboard', [AdminPostController::class,'store']);


require __DIR__.'/auth.php';

