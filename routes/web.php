<?php

use Inertia\Inertia;
use App\Models\Listing;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\ProfileController;

Route::get('/', [ListingController::class, 'index']);
 
//show create form
Route::get('/listings/create', [ListingController::class, 'create'])->middleware('auth');

//store new listing
Route::post('/listings', [ListingController::class, 'store'])->middleware('auth');
// show edit form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth');
//  update listing
Route::put('/listings/{listing}', [ListingController::class, 'update'])->middleware('auth');
// delete listing
Route::delete('/listings/{listing}', [ListingController::class, 'destroy'])->middleware('auth');

// single listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);
// show register form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

// store new user
Route::post('/users', [UserController::class, 'store']);
//log out user
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');
//show login form
Route::get('/login',[UserController::class, 'login'])->name('login')->middleware('guest');
// log in user
Route::post('/users/authenticate', [UserController::class, 'authenticate']);



