@extends('layouts.app')

@section('content')
    <h2>Register New Account</h2>
    <form action="/register" method="POST" style="max-width:300px;">
        @csrf
        <label>Your Name</label>
        <input type="text" name="name" required>

        <label>Email Address</label>
        <input type="email" name="email" required>
        
        <label>Password Secret</label>
        <input type="password" name="password" required>
        
        <button type="submit">Create User Now</button>
    </form>
@endsection