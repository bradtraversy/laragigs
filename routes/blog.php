<?php

use \App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\BlogController;

// // All blogs
Route::get('/main', [DashboardController::class, 'main']);

// Single blog
Route::get('/blogs/{blog}', [DashboardController::class, 'show']);

Route::middleware(['auth:sanctum,admin', config('jetstream.auth_session', 'verified')])->group(function () {

    // // // Show Create Form
    // Route::get('/admin/Blog/create', [BlogController::class, 'create'])->middleware('auth:admin');

    // // // Store blog Data
    // Route::post('/admin/blogs', [BlogController::class, 'store'])->middleware('auth:admin');

    // // // Show Edit Form
    // Route::get('admin/blogs/{blog}/edit', [BlogController::class, 'edit'])->middleware('auth:admin');

    // // // Update blog
    // Route::put('/admin/blogs/{blog}', [BlogController::class, 'update'])->middleware('auth:admin');

    // // // Delete blog
    // Route::delete('/admin/blogs/{blog}', [BlogController::class, 'destroy'])->middleware('auth:admin');

    // // // Manage blog
    Route::get('admin/Blog/manage', [BlogController::class, 'manage'])->middleware('auth:admin');

    require_once __DIR__ . '/admin.php';
});
