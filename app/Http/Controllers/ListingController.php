<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ListingController extends Controller
{
    public function index()
    {
        return view  ('listings.index', [
 
            'listings' => Listing::latest()->filter(request(['tag','search']))->get()
            ]);
    }
    public function show(Listing $listing)
    {
        return view('listings.show', [
            'listing' => $listing
        ]);
    }
    // show create form
    public function create()
    {
        return view('listings.Creates');
    }
    // store new listing
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'title' => 'required',
            'company' => ['required', Rule::unique('listings', 'company')],
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tag' => 'required',
            'description' => 'required',
            // 'image' => 'required|image|max:5000'
           
        ]);
        return redirect('/');
    }
    
}
