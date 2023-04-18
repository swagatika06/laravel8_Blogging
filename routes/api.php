<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/posts', [App\Http\Controllers\PostController::class, 'index'])->name('posts.index');
Route::get('/posts/{slug}', [App\Http\Controllers\PostController::class, 'show'])->name('posts.show');
