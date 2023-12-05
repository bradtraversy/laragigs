<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use \App\Models\Blog;
use Illuminate\Http\Request;

// // All blogs
Route::get('/main', [BlogController::class, 'main']);

// // Show Create Form
Route::get('/Blog/create', [BlogController::class, 'create'])->middleware('admin');

// // Store blog Data
Route::post(' /blogs', [BlogController::class, 'store'])->middleware('auth');

// // Show Edit Form
Route::get('/Blog/{blog}/edit', [BlogController::class, 'edit'])->middleware('auth');

// // Update blog
Route::put('/Blog/{blog}', [BlogController::class, 'update'])->middleware('auth');

// // Delete blog
Route::delete('/Blog/{blog}', [BlogController::class, 'destroy'])->middleware('auth');

// Single blog
Route::post('/Blog/{blog}', [BlogController::class, 'show']);

// // Manage blog
Route::get('/Blog/manage', [BlogController::class, 'manage'])->middleware('auth');


