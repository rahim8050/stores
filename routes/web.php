<?php

use Inertia\Inertia;
use App\Models\Listing;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
 return view  ('listings', [
 'heading' => 'latest listings',
 'listings' => Listing::all()
 ]);

});
Route::get('/listings/{listing}', function ($id) {
 return view('listing', [
 'listing' => Listing::find($id)
 ]);
});


