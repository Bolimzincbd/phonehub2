@extends('layouts.app')

@section('content')
    <h2>Phone News and Blog</h2>
    
    @foreach($blogs as $blog)
        <div style="border: 1px solid gray; padding: 15px; margin-bottom: 15px; background: #fafafa;">
            <h3>{{ $blog->title }}</h3>
            <p><small>Date Post: {{ $blog->created_at->format('Y-m-d') }}</small></p>
            @if($blog->image)
                <img src="{{ asset('images/' . $blog->image) }}" width="150" border="1">
            @endif
            <p>{{ $blog->short_description }}</p>
            <a href="/blog/{{ $blog->id }}" class="btn">Read Full Post</a>
        </div>
    @endforeach

@endsection