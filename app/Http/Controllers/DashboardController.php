<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Listing;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
     // Show all listings
     public function main()
     {
         return view('Blog.main', [
             'blogs' => Blog::latest()->filter(request(['tag', 'search']))->paginate(6)
         ]);


     }

     //Show single listing
     public function show(Blog $blog)
     {
         return view('Blog.show', [
             'blog' => $blog
         ]);
     }

     public function jobs()
    {
        return view('listings.jobs', [
            'listings' => Listing::latest()->filter(request(['tag', 'search']))->paginate(12)
        ]);
    }
}
