<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ListingController extends Controller
{
    public function index()
    {
        return view  ('listings.index', [
 
            'listings' => Listing::latest()->filter(request(['tag','search']))->paginate(5)
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
            'tags' => 'required',
            'description' => 'required'
        ]);
        if ($request->hasFile('logo')) {
            $formFields['logo'] = $request->logo->store('logos', 'public');
        }
        Listing::create($formFields);
        return redirect('/')->with('message', 'Listing Created successfully');
    }
    public function edit(Listing $listing)
    {
        
        return view('listings.edit', [
            'listing' => $listing
        ]);
    }
    public function update(Request $request, Listing $listing)
    {
        $formFields = $request->validate([
            'title' => 'required',
            'company' => ['required'],
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required'
        ]);
        if ($request->hasFile('logo')) {
            $formFields['logo'] = $request->logo->store('logos', 'public');
        }
        $listing->update($formFields);
        return back()->with('message', 'Listing Updated successfully');
    }
    // delete listing
    public function destroy(Listing $listing)
    {
        $listing->delete();
        return redirect('/')->with('message', 'Listing Deleted successfully');
    }
    // relationship 
   
}
