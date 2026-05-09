@extends('layouts.app')

@section('content')

    <h2>Login Account Here</h2>
    <p>Please put your name and password secret word to inside.</p>

    <form method="POST" action="/login-post" style="width: 300px;">
        @csrf
        <p>Email Address:</p>
        <input type="email" name="email" required style="width: 100%; margin-bottom: 10px;">
        
        <p>Password Word:</p>
        <input type="password" name="password" required style="width: 100%; margin-bottom: 10px;">
        
        <br><br>
        <button type="submit">Click To Login</button>
    </form>

@endsection