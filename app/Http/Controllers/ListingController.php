<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\ListingUpdateRequest;
use App\Http\Requests\ListingCreateRequest;

class ListingController extends Controller
{
    /**
     * Show a list of all the listings.
     *
     * @return View
     */
    public function index(): View
    {
        return view('listings.index', [
            'listings' => Listing::latest()->filter(request(['tag', 'search']))->paginate(6),
        ]);
    }

    /**
     * Show a listing.
     *
     * @param  Listing  $listing
     *
     * @return View
     */
    public function show(Listing $listing): View
    {
        return view('listings.show', ['listing' => $listing]);
    }

    /**
     * Show the edit form.
     *
     * @param  Listing  $listing
     *
     * @return View
     */
    public function edit(Listing $listing): View
    {
        return view('listings.edit', ['listing' => $listing]);
    }

    /**
     * Update the listing.
     *
     * @param  ListingUpdateRequest  $request
     * @param  Listing               $listing
     *
     * @return RedirectResponse
     */
    public function update(ListingUpdateRequest $request, Listing $listing): RedirectResponse
    {
        $data = $request->validated();

        if ($request->hasFile('logo')) {
            $data['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $listing->update($data);

        return back()->with('message', 'Listing updated successfully!');
    }

    /**
     * Store a new listing.
     *
     * @param  ListingCreateRequest  $request
     *
     * @return RedirectResponse
     */
    public function store(ListingCreateRequest $request): RedirectResponse
    {
        $data = $request->validated();

        if ($request->hasFile('logo')) {
            $data['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $data['user_id'] = auth()->id();

        Listing::create($data);

        return redirect('/')->with('message', 'Listing created successfully!');
    }

    /**
     * Show the create listing form
     *
     * @return View
     */
    public function create(): View
    {
        return view('listings.create');
    }

    /**
     * Delete the listing.
     *
     * @param  Listing  $listing
     *
     * @return RedirectResponse
     */
    public function destroy(Listing $listing): RedirectResponse
    {
        abort_if($listing->user_id !== auth()->id(), 403, 'Unauthorized action');

        $listing->delete();

        return redirect('/')->with('message', 'Listing deleted successfully');
    }
}
