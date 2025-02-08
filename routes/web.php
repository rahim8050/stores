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


// single listing

Route::get('/listings/{listing}', [ListingController::class, 'show']);
 
