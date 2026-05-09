@extends('layouts.app')

@section('content')
    <h2>{{ $blog->title }}</h2>
    <p>Post date time: {{ $blog->created_at }}</p>
    
    @if($blog->image)
        <img src="{{ asset('images/' . $blog->image) }}" width="300" border="1"><br><br>
    @endif

    <div style="border:1px solid gray; padding:20px; background:white;">
        {!! nl2br(e($blog->content)) !!}
    </div>

    <br>
    <a href="/blog" class="btn">Go Back Blog List</a>
@endsection