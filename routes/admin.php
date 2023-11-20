<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use \App\Models\Admin;

use Illuminate\Support\Facades\Auth;

Route::prefix('admin')->namespace('App\Http\controllers\Admin')->group(function(){
    Route::match(['get', 'post'], 'login', 'AdminController@login');
    Route::group(['middleware'=>['Admin']],function(){
        Route::get('admins', 'AdminController@admins');
    });
});

// // All Listings
// Route::post('/', [AdminController::class, 'admins'])->middleware('admin')->name('/admins')->namespace('admins.');

// // Show Create Form
// Route::post('/create', [AdminController::class, 'create']);

// // Store Listing Data
// Route::post('/admins', [AdminController::class, 'store'])->middleware('admin');

// Show Register/Create Form
Route::post('/register', [AdminController::class, 'create'])->middleware('guest');

// Create New User
Route::post('/users', [AdminController::class, 'store']);

// Log User Out
Route::post('/logout', [AdminController::class, 'logout'])->middleware('auth');

// Show Login Form
Route::post('/login', [AdminController::class, 'login'])->name('login')->middleware('guest');

// Log In User
Route::post('/users/authenticate', [AdminController::class, 'authenticate']);
