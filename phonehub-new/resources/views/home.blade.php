@extends('layouts.app')

@section('content')

    <h2>Welcome to Phone Website</h2>
    <p>We show many good phone for you. You can see price and compare.</p>

    <hr>
    <h3>Latest Phone</h3>
    <div class="card-box">
        @foreach($latestPhones as $phone)
            @include('partials.phone_card', ['phone' => $phone])
        @endforeach
    </div>

    <hr>
    <h3>Recommended Phone</h3>
    <div class="card-box">
        @foreach($recommendPhones as $phone)
            @include('partials.phone_card', ['phone' => $phone])
        @endforeach
    </div>

    <hr>
    <h3>Upcoming Phone</h3>
    <div class="card-box">
        @foreach($upcomingPhones as $phone)
            @include('partials.phone_card', ['phone' => $phone])
        @endforeach
    </div>

    <hr>
    <h3>Other Normal Phone</h3>
    <div class="card-box">
        @foreach($normalPhones as $phone)
            @include('partials.phone_card', ['phone' => $phone])
        @endforeach
    </div>

@endsection