@extends('layouts.app')

@section('content')
    <h2>Admin Dashboard Area</h2>
    <p>Welcome admin boss. You can manage website data here.</p>
    
    <ul>
        <li><a href="/admin/phones">Manage Phone Specs Data</a></li>
        <li><a href="/admin/stores">Manage Store List</a></li>
        <li><a href="/admin/prices">Manage Store Price Compare</a></li>
        <li><a href="/admin/blogs">Manage Blog News Post</a></li>
    </ul>
@endsection