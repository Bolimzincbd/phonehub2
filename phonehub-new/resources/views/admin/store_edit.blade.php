@extends('layouts.app')

@section('content')
    <h2>Edit Store Data</h2>
    <form action="/admin/stores/update/{{ $store->id }}" method="POST">
        @csrf
        Store Name: <input type="text" name="name" value="{{ $store->name }}" required>
        Link Website: <input type="text" name="link" value="{{ $store->link }}">
        <button type="submit">Update Store Edit</button>
    </form>
@endsection