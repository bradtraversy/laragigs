<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use \App\Models\Blog;
use Illuminate\Http\Request;

// // All Listings
Route::get('/main', [BlogController::class, 'main']);

// // Show Create Form
Route::get('/Blog/create', [BlogController::class, 'create'])->middleware('admin');

// // Store Listing Data
Route::post(' /blogs', [BlogController::class, 'store'])->middleware('admin');

// // Show Edit Form
Route::get('/Blog/{blog}/edit', [BlogController::class, 'edit'])->middleware('admin');

// // Update Listing
Route::put('/Blog/{blog}', [BlogController::class, 'update'])->middleware('admin');

// // Delete Listing
Route::delete('/Blog/{blog}', [BlogController::class, 'destroy'])->middleware('admin');

// Single Listing
Route::get('/Blog/{blog}', [BlogController::class, 'show']);

// // Manage Listings
Route::get('/Blog/manage', [BlogController::class, 'manage'])->middleware('auth');


