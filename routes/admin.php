<?php

use App\Models\Admin;
use Illuminate\Http\Request;
use Laravel\Fortify\RoutePath;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ListingController;
use App\Http\Providers\FortifyServiceProvider;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;
use App\Models\Team;

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

Route::middleware('admin:admin')->group(function () {
    Route::get('admin/login', [AdminController::class, 'LoginForm']);
    Route::post('/admin/login', [AdminController::class, 'store'])->name('admin.login');
    Route::get('/admin/register', [AdminController::class, 'registerView']);
    Route::get('/admin/register', [AdminController::class, 'showRegistrationForm']);
Route::post('/admin/register', [AdminController::class, 'register']);


    Route::post(RoutePath::for('login', '/login'), [AuthenticatedSessionController::class, 'store'])
        ->middleware(array_filter([
            'auth:admin' . config('admin:sanctum')
        ]));
    // require_once __DIR__ . '/routes.php';

});


Route::middleware(['auth:admin', config('admin:sanctum'), 'verified'])->group(function () {
    Route::get('admin/dashboard', function () {
        return view('dashboard');
    })
        ->name('dashboard')
        ->middleware('admin:sanctum');

    Route::post('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

    // Route::resource('listings..create', ListingController::class)->middleware('auth:admin');
});
require_once __DIR__ . '/jetstream.php';
