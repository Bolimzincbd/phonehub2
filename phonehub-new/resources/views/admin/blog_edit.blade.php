@extends('layouts.app')

@section('content')
    <h2>Edit News Blog</h2>
    <form action="/admin/blogs/update/{{ $blog->id }}" method="POST">
        @csrf
        Title Subject: <input type="text" name="title" value="{{ $blog->title }}" required>
        Image Name: <input type="text" name="image" value="{{ $blog->image }}">
        Short Describe: <textarea name="short_description">{{ $blog->short_description }}</textarea>
        Full Story Word: <textarea name="content" style="height:150px;">{{ $blog->content }}</textarea>
        <button type="submit">Update Blog Post Data</button>
    </form>
@endsection