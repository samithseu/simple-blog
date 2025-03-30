<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::orderBy("created_at", "desc")->paginate(16);
        return view('blogs.index', compact('blogs'));
    }

    public function show(Blog $blog) {
        return view('blogs.show', compact('blog'));
    }

    public function create() {
        return view('blogs.create');
    }

    public function store(Request $request) {
        $validated = $request->validate([
            "title" => "required|string|max:75",
            "body" => "required|string",
        ]);

        $blog = Blog::create($validated);
        $blog->save();
        session()->flash('success', 'Blog created successfully!');
        return redirect()->route('blogs');
    }

    public function edit($id) {

    }

    public function update($id) {

    }

    public function destroy(Blog $blog) {
        $blog->delete();
        session()->flash('success', 'Blog deleted successfully!');
        return redirect()->route('blogs');
    }
}
