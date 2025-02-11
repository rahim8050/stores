<?php

use App\Http\Controllers\ListingController;
use Inertia\Inertia;
use App\Models\Listing;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\ProfileController;

Route::get('/', [ListingController::class, 'index']);
 
//show create form
Route::get('/listings/create', [ListingController::class, 'create']);

//store new listing
Route::post('/listings', [ListingController::class, 'store']);
// show edit form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit']);
//  update listing
Route::put('/listings/{listing}', [ListingController::class, 'update']);
// delete listing
Route::delete('/listings/{listing}', [ListingController::class, 'destroy']);

// single listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);
 
