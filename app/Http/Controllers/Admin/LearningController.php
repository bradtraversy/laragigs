<?php

namespace App\Http\Controllers\Admin;

use App\Models\learning;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class LearningController extends Controller
{

    // Show Create Form
    public function create()
    {
        return view('Learn.create');
    }

    // Store Listing Data
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'School' => 'required',
            'course' => 'required',
            'units' => 'required',
            'email' => ['required', 'email'],
            'mode' => 'required',
            'fees' => 'required',
            'number' => 'required'
        ]);


        $formFields['user_id'] = auth()->id();

        Learning::create($formFields);

        return redirect('/learn')->with('message', 'Created successfully!');
    }

    // Show Edit Form
    public function edit(learning $learn)
    {
        return view('Learn.edit', ['learn' => $learn]);
    }

    // Update Listing Data
    public function update(Request $request, learning $learn)
    {
        // Make sure logged in user is owner
        if ($learn->user_id != auth()->id()) {
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



        $learn->update($formFields);

        return back()->with('message', 'Updated successfully!');
    }

    // Delete Listing
    public function destroy(learning $learn)
    {
        // Make sure logged in user is owner
        if ($learn->user_id != auth()->id()) {
            abort(403, 'Unauthorized Action');
        }


        $learn->delete();
        return redirect('/')->with('message', 'Deleted successfully');
    }

    // Manage Listings
    public function manage()
    {
        return view('learns.manage', ['blogs' => auth()->user()->learns()->get()]);
    }
}
