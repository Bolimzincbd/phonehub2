@extends('layouts.app')

@section('content')
    <h2>Admin Manage Store List</h2>
    <a href="/admin" class="btn">Back Dashboard</a>
    <hr>

    <h3>Add New Store</h3>
    <form action="/admin/stores/add" method="POST">
        @csrf
        Store Name: <input type="text" name="name" required>
        Link Website: <input type="text" name="link">
        <button type="submit">Save Store</button>
    </form>

    <hr>
    <h3>All Store Data</h3>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Link Address</th>
            <th>Action Edit</th>
        </tr>
        @foreach($stores as $store)
        <tr>
            <td>{{ $store->id }}</td>
            <td>{{ $store->name }}</td>
            <td>{{ $store->link }}</td>
            <td>
                <a href="/admin/stores/edit/{{ $store->id }}" class="btn">Edit Name</a>
                <form action="/admin/stores/delete/{{ $store->id }}" method="POST" style="display:inline;">
                    @csrf
                    <button type="submit" style="background:red;">Delete Store</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection