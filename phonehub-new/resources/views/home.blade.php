@extends('layouts.app')

@section('content')

    <h2>All Phone We Have Here</h2>
    <p>Welcome to website. We have many good phone. You look table below to see phone and price money.</p>

    <form method="GET" action="/">
        <label>Search Phone:</label>
        <input type="text" name="search" placeholder="type phone name...">
        <button type="submit">Search Now</button>
    </form>

    <table>
        <tr>
            <th>Picture</th>
            <th>Phone Name</th>
            <th>Brand</th>
            <th>Money Price</th>
            <th>Action Click</th>
        </tr>
        
        @foreach($phones as $phone)
        <tr>
            <td>
                <img src="{{ asset('images/' . $phone->image_url) }}" alt="phone image" width="80">
            </td>
            <td>{{ $phone->name }}</td>
            <td>{{ $phone->brand }}</td>
            <td>${{ $phone->price }}</td>
            <td>
                <a href="/phone/{{ $phone->id }}">
                    <button>Look Detail</button>
                </a>
            </td>
        </tr>
        @endforeach

    </table>

@endsection