@extends('layouts.app')

@section('content')
    <h2>Edit News Blog</h2>
    <a href="/admin/blogs" class="btn">Back To List</a>
    <hr>

    <form action="/admin/blogs/update/{{ $blog->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        Title Subject: <input type="text" name="title" value="{{ $blog->title }}" required>
        
        <p><strong>Current Image:</strong><br>
        @if($blog->image)
            <img src="{{ asset('images/' . $blog->image) }}" width="150">
        @else
            No image set before.
        @endif
        </p>

        Upload New Image (Leave empty to keep old image): 
        <input type="file" name="image_file" accept="image/*">
        
        Short Describe: <textarea name="short_description">{{ $blog->short_description }}</textarea>
        Full Story Word: <textarea name="content" style="height:150px;">{{ $blog->content }}</textarea>
        <button type="submit">Update Blog Post Data</button>
    </form>
@endsection