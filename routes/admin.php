<?php

use App\Models\Team;
use App\Models\Admin;
use Illuminate\Http\Request;
use Laravel\Fortify\RoutePath;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ListingController;
use App\Http\Controllers\Admin\LearningController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

// use App\Http\Controllers\Auth\AuthenticatedSessionController;

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

// Common Resource Routes:
// index - Show all listings
// show - Show single listing
// create - Show form to create new listing
// store - Store new listing
// edit - Show form to edit listing
// update - Update listing
// destroy - Delete listing

// Admin routes
Route::middleware(['admin'])->group(function () {
    Route::get('admin/login', [AdminController::class, 'LoginForm']);
    Route::post('/admin/login', [AdminController::class, 'store'])->name('admin.login');
    Route::get('/admin/register', [AdminController::class, 'registerView']);
    // Route::get('/admin/register', [AdminController::class, 'showRegistrationForm']);
    Route::post('/admin/register', [AdminController::class, 'register']);

    // Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'admin'], function () {

    require __DIR__ . '/api.php';
    Route::post(RoutePath::for('login', '/login'), [AuthenticatedSessionController::class, 'store'])->middleware(array_filter(['admin' . config('admin')]));
    Route::get('admin/dashboard', [HomeController::class, 'index'])
        ->name('dashboard')
        ->middleware('admin');

    Route::resource('/admin/listings', ListingController::class);
    Route::resource('/admin/blogs', BlogController::class);
    Route::resource('/admin/Learn', LearningController::class);

    // // Show Create Form
    // Route::get('admin/listings/create', [ListingController::class, 'create'])
    //     ->name('listings')

    //     ->middleware('admin');

    Route::post('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

    require_once __DIR__ . '/jetstream.php';
});
// });
