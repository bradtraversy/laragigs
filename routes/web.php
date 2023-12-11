<?php

use App\Mail\TestEmail;
use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\Admin\ListingController;
use App\Http\Controllers\LearningController;

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

// All Listings
Route::get('/', [JobController::class, 'index']);



// // Single Listing
Route::get('/listings/{listing}', [JobController::class, 'show']);

require_once __DIR__ . '/admin.php';


// Show Register/Create Form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

// Create New User
Route::post('/users', [UserController::class, 'store']);

// Log User Out
Route::post('/logout', [UserController::class, 'logout']);

// Show Login Form
Route::get('/login', [UserController::class, 'login'])
    ->name('login')
    ->middleware('guest');

// Log In User
Route::post('/users/authenticate', [UserController::class, 'authenticate']);


Route::get('/send-test-email', function () {
    Mail::to('damalide20@gmail.com')->send(new TestEmail());
    return "Test email sent!";
});

require_once __DIR__ . '/jetstream.php';

Route::middleware(['admin'])->group(function () {
    require __DIR__ . '/admin.php';






    // // Store Listing Data
    // Route::post('/listings', [ListingController::class, 'store'])
    //     ->name('listings')
    //     ->middleware('admin');

    // // Show Edit Form
    // Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])
    //     ->name('listings')
    //     ->middleware('admin');

    // // Update Listing
    // Route::put('/listings/{listing}', [ListingController::class, 'update'])
    //     ->name('listings')
    //     ->middleware('admin');

    // // Delete Listing
    // Route::delete('/listings/{listing}', [ListingController::class, 'destroy'])
    //     ->name('listings')
    //     ->middleware('admin');

    // // Manage Listings
    // Route::get('/listings/manage', [ListingController::class, 'manage'])
    //     ->name('listings')
    //     ->middleware('admin');


});
