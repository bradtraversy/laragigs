<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ListingController extends Controller
{
    // Show all listings
    public function index()
    {
        // SitemapGenerator::create('https://example.com')->writeToFile($path);
        return view('listings.index', [
            'listings' => Listing::latest()->filter(request(['tag', 'search']))->paginate(12)
        ]);
    }

    public function search(Request $request)
    {
        // dd(1);
        $name = $request->name;
        $occupation = $request->occupation;
        if ($occupation == 'all') {
            $listings = Listing::where('title', 'like', '%' . $name  . '%')
                ->orWhere('description', 'like', '%' . $name  . '%')
                ->orWhere('tags', 'like', '%' . $name  . '%')->paginate(12);
        } else {
            if ($name == '') {
                $listings = Listing::where('occupation', 'like', '%' . $occupation  . '%')->paginate(12);
            } else {
                # code...
                $listings =  Listing::where(function ($query) use ($name) {
                    return $query->where('title', 'like', '%' . $name  . '%')
                        ->orWhere('description', 'like', '%' . $name  . '%')
                        ->orWhere('tags', 'like', '%' . $name  . '%');
                })->where(function ($query) use ($occupation) {
                    return $query->where('occupation', 'like', '%' . $occupation  . '%');
                })->paginate(12);
            }
        }
        // dd($listings);
        $d['listings'] = $listings;
        $d['name'] = $occupation;
        $d['occupation'] = $occupation;
        return view('listings.index', $d);
    }
    //Show single listing
    public function show(Listing $listing)
    {
        return view('listings.show', [
            'listing' => $listing
        ]);
    }

    // Show Create Form
    public function create()
    {
        return view('listings.create');
    }

    // Store Listing Data
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
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $formFields['user_id'] = auth()->id();

        Listing::create($formFields);

        return redirect('/')->with('message', 'Listing created successfully!');
    }

    // Show Edit Form
    public function edit(Listing $listing)
    {
        return view('listings.edit', ['listing' => $listing]);
    }

    // Update Listing Data
    public function update(Request $request, Listing $listing)
    {
        // Make sure logged in user is owner
        if ($listing->user_id != auth()->id()) {
            abort(403, 'Unauthorized Action');
        }

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
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $listing->update($formFields);

        return back()->with('message', 'Listing updated successfully!');
    }

    // Delete Listing
    public function destroy(Listing $listing)
    {
        // Make sure logged in user is owner
        if ($listing->user_id != auth()->id()) {
            abort(403, 'Unauthorized Action');
        }

        $listing->delete();
        return redirect('/')->with('message', 'Listing deleted successfully');
    }

    // Manage Listings
    public function manage()
    {
        return view('listings.manage', ['listings' => auth()->user()->listings()->get()]);
    }
}
