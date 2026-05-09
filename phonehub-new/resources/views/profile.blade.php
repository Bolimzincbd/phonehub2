@extends('layouts.app')

@section('content')
    <h2>My User Profile</h2>
    <p>Here is your account information page.</p>

    <ul>
        <li><strong>Name is:</strong> {{ $user->name }}</li>
        <li><strong>Email is:</strong> {{ $user->email }}</li>
        <li><strong>Account Role:</strong> {{ $user->role }}</li>
        <li><strong>Join Date:</strong> {{ $user->created_at }}</li>
    </ul>
@endsection