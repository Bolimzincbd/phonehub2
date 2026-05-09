@extends('layouts.app')

@section('content')

    <h2>Phone Detail for {{ $phone->name }}</h2>

    <div style="display: flex; gap: 20px;">
        <div>
            <img src="{{ asset('images/' . $phone->image_url) }}" alt="image" width="250" style="border: 1px solid black;">
        </div>
        <div>
            <h3>Specs Information</h3>
            <ul>
                <li><strong>Brand Name:</strong> {{ $phone->brand }}</li>
                <li><strong>Price Money:</strong> ${{ $phone->price }}</li>
                <li><strong>OS System:</strong> {{ $phone->os }}</li>
                <li><strong>Processor Brain:</strong> {{ $phone->processor }}</li>
                <li><strong>RAM Memory:</strong> {{ $phone->ram }}</li>
                <li><strong>Storage Space:</strong> {{ $phone->storage }}</li>
                <li><strong>Camera Lens:</strong> {{ $phone->camera }}</li>
                <li><strong>Battery Power:</strong> {{ $phone->battery }}</li>
                <li><strong>Screen Size:</strong> {{ $phone->screen_size }}</li>
                <li><strong>Release Status:</strong> {{ $phone->status }}</li>
            </ul>
        </div>
    </div>
    
    <br>
    <p><strong>Description word:</strong> {{ $phone->description }}</p>

    <form action="/compare/add/{{ $phone->id }}" method="POST">
        @csrf
        <button type="submit">Compare This Phone</button>
    </form>

    <hr>
    <h3>Store Price Check List</h3>
    <table>
        <tr>
            <th>Store Name</th>
            <th>Price</th>
            <th>Location / Link</th>
            <th>Time Update</th>
        </tr>
        @foreach($phone->storePrices as $storePrice)
        <tr>
            <td>{{ $storePrice->store->name }}</td>
            <td>${{ $storePrice->price }}</td>
            <td>{{ $storePrice->link }}</td>
            <td>{{ $storePrice->updated_at->format('Y-m-d') }}</td>
        </tr>
        @endforeach
    </table>

@endsection