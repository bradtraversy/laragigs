<?php

namespace App\Http\Controllers;
use App\Models\learning;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /// Show all listings
    public function learn()
    {
        return view('Learn.learn', [
            'learns' => Learning::latest()->filter(request(['tag', 'search']))->paginate(6)
        ]);

    }

    //Show single listing
    public function show(learning $learn)
    {
        return view('Learn.show', [
            'learn' => $learn
        ]);
    }

}
