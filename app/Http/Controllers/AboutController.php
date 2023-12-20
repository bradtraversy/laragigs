<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
     // Show all listings
     public function about()
     {
         return view('components.about');
     }

    //  //Show single listing
    //  public function show(Blog $blog)
    //  {
    //      return view('Blog.show', [
    //          'blog' => $blog
    //      ]);
    //  }

    //  public function jobs()
    // {
    //     return view('listings.jobs', [
    //         'listings' => Listing::latest()->filter(request(['tag', 'search']))->paginate(12)
    //     ]);
    // }
}
