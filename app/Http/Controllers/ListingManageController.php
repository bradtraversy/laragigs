<?php

namespace App\Http\Controllers;

class ListingManageController extends Controller
{
    public function __invoke()
    {
        return view('listings.manage', ['listings' => auth()->user()->listings()->get()]);
    }
}
