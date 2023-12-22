<?php

namespace App\Http\Livewire;

use App\Models\Blog;
use App\Models\Listing;
use Livewire\Component;
use Livewire\WithPagination;

class SkeletonLoader extends Component
{
    use WithPagination;
    public function render()
    {
        sleep(3);
        return view('livewire.skeleton-loader', [
        'blogs' => Blog::latest()->filter(request(['tag', 'search']))->paginate(6),
        'listings' => Listing::latest()->filter(request(['tag', 'search']))->paginate(6),
        ]);
    }
}
