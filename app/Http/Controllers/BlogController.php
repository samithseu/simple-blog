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

    public function show($id) {
        $blog = Blog::findOrFail($id);
        return view('blogs.show', compact('blog'));
    }

    public function create() {

    }

    public function store() {

    }

    public function edit($id) {

    }

    public function update($id) {

    }

    public function destroy($id) {

    }
}
