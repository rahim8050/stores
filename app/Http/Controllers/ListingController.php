<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function index()
    {
        return view  ('listings', [
 
            'listings' => Listing::all()
            ]);
    }
    public function show(listing $listing)
    {
        return view('listing', [
            'listing' => Listing::find($listing)
        ]);
    }
}
