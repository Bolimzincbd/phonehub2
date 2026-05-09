@extends('layouts.app')

@section('content')
    <h2>Edit Phone Specs</h2>
    <form action="/admin/phones/update/{{ $phone->id }}" method="POST">
        @csrf
        Name: <input type="text" name="name" value="{{ $phone->name }}" required>
        Brand: <input type="text" name="brand" value="{{ $phone->brand }}">
        Price: <input type="number" step="0.01" name="price" value="{{ $phone->price }}">
        OS: <input type="text" name="os" value="{{ $phone->os }}">
        Processor: <input type="text" name="processor" value="{{ $phone->processor }}">
        RAM: <input type="text" name="ram" value="{{ $phone->ram }}">
        Storage: <input type="text" name="storage" value="{{ $phone->storage }}">
        Camera: <input type="text" name="camera" value="{{ $phone->camera }}">
        Battery: <input type="text" name="battery" value="{{ $phone->battery }}">
        Screen Size: <input type="text" name="screen_size" value="{{ $phone->screen_size }}">
        Description: <textarea name="description">{{ $phone->description }}</textarea>
        Image File Name: <input type="text" name="image_url" value="{{ $phone->image_url }}">
        Status: 
        <select name="status">
            <option value="Normal" @if($phone->status == 'Normal') selected @endif>Normal</option>
            <option value="Latest" @if($phone->status == 'Latest') selected @endif>Latest</option>
            <option value="Recommended" @if($phone->status == 'Recommended') selected @endif>Recommended</option>
            <option value="Upcoming" @if($phone->status == 'Upcoming') selected @endif>Upcoming</option>
        </select>
        <button type="submit">Update Save Phone</button>
    </form>
@endsection