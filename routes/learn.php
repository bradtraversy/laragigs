<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LearningController;
use \App\Models\learning;

// // All learns
Route::get('/learn', [LearningController::class, 'learn']);

// // Show Create Form
Route::get('/learn/create', [LearningController::class, 'create'])->middleware('auth');

// // Store learn Data
Route::post('/learns', [LearningController::class, 'store'])->middleware('auth');

// // Show Edit Form
Route::get('/Learn/{learn}/edit', [LearningController::class, 'edit'])->middleware('auth');

// // Update Listing
Route::put('/Learn/{learn}', [LearningController::class, 'update'])->middleware('auth');

// // Delete learns
Route::delete('/Learn/{learn}', [LearningController::class, 'destroy'])->middleware('auth');

// Single learns
Route::get('/Learn/{learn}', [LearningController::class, 'show']);

// // Manage learn
Route::get('/Learn/malearn', [LearningController::class, 'manage'])->middleware('auth');
