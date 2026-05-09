@extends('layouts.app')

@section('content')
    <h2>Login Account Form</h2>
    <form action="/login" method="POST" style="max-width:300px;">
        @csrf
        <label>Email Address</label>
        <input type="email" name="email" required>
        
        <label>Password Secret</label>
        <input type="password" name="password" required>
        
        <button type="submit">Go Login</button>
    </form>
@endsection