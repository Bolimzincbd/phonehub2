<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;

class BlogController
{
    public function index()
    {
        $blogs = BlogPost::orderBy('created_at', 'desc')->get();
        return view('blog.index', compact('blogs'));
    }

    public function show($id)
    {
        $blog = BlogPost::findOrFail($id);
        return view('blog.detail', compact('blog'));
    }
}