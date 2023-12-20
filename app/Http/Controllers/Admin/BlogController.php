<?php
namespace App\Http\Controllers\Admin;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    // Show Create Form
    public function create()
    {
        return view('Blog.create');
    }

    // Store Listing Data
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'category' => 'required',
            'title' => 'required',
            'tags' => 'required',
            'email' => ['required', 'email'],
            'description' => 'required'
        ]);

        if ($request->hasFile('image')) {
            $formFields['image'] = $request->file('image')->store('images', 'public');
        }

        $formFields['admin_id'] = auth()->id();

        Blog::create($formFields);

        return redirect('/admin/dashboard')->with('message', 'Blog created successfully!');
    }

    // Show Edit Form
    public function edit(Blog $blog)
    {
        return view('Blog.edit', ['blog' => $blog]);
    }

    // Update Listing Data
    public function update(Request $request, Blog $blog)
    {
        // Make sure logged in user is owner
        if ($blog->admin_id != auth()->id()) {
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

        if ($request->hasFile('image')) {
            $formFields['image'] = $request->file('image')->store('images', 'public');
        }

        $blog->update($formFields);

        return back()->with('message', 'Blog updated successfully!');
    }

    // Delete Listing
    public function destroy(Blog $blog)
    {
        // Make sure logged in user is owner
        if ($blog->admin_id != auth()->id()) {
            abort(403, 'Unauthorized Action');
        }

        if ($blog->image && Storage::disk('public')->exists($blog->limage)) {
            Storage::disk('public')->delete($blog->image);
        }
        $blog->delete();
        return redirect('/')->with('message', 'Blog deleted successfully');
    }

    // Manage Listings
    public function manage()
    {
        return view('blogs.manage', ['blogs' => auth()->user()->blogs()->get()]);
    }
}
