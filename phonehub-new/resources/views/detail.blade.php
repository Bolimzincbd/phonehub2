@extends('layouts.app')

@section('content')

    <h2>Look Detail For {{ $phone->name }}</h2>
    <p>This page show all information about this one phone.</p>

    <div style="border: 1px solid gray; padding: 15px; background-color: #fafafa;">
        <img src="{{ asset('images/' . $phone->image_url) }}" alt="phone image" width="200" style="border: 1px solid black;">
        
        <h3>Name is: {{ $phone->name }}</h3>
        <p><strong>Brand Make It:</strong> {{ $phone->brand }}</p>
        <p><strong>Price Cost:</strong> ${{ $phone->price }}</p>
        
        <br>
        <h4>Technical Spec Information</h4>
        <ul>
            <li><strong>Storage Space:</strong> {{ $phone->storage }}</li>
            <li><strong>RAM Memory:</strong> {{ $phone->ram }}</li>
            <li><strong>Camera Lens:</strong> {{ $phone->camera }}</li>
            <li><strong>Battery Power:</strong> {{ $phone->battery }}</li>
            <li><strong>Screen Size:</strong> {{ $phone->screen_size }}</li>
        </ul>

        <p><strong>Word Describe:</strong> {{ $phone->description }}</p>
    </div>

    <br>
    <a href="/">
        <button>Go Back Home</button>
    </a>

@endsection