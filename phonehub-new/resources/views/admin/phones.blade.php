@extends('layouts.app')

@section('content')
    <h2>Admin Manage Phones</h2>
    <a href="/admin" class="btn">Back Dashboard</a>
    <hr>

    <h3>Add New Phone</h3>
    <form action="/admin/phones/add" method="POST">
        @csrf
        Name: <input type="text" name="name" required>
        Brand: <input type="text" name="brand">
        Price: <input type="number" step="0.01" name="price">
        OS: <input type="text" name="os">
        Processor: <input type="text" name="processor">
        RAM: <input type="text" name="ram">
        Storage: <input type="text" name="storage">
        Camera: <input type="text" name="camera">
        Battery: <input type="text" name="battery">
        Screen Size: <input type="text" name="screen_size">
        Description: <textarea name="description"></textarea>
        Image File Name: <input type="text" name="image_url">
        Status: 
        <select name="status">
            <option value="Normal">Normal</option>
            <option value="Latest">Latest</option>
            <option value="Recommended">Recommended</option>
            <option value="Upcoming">Upcoming</option>
        </select>
        <button type="submit">Save Add Phone</button>
    </form>

    <hr>
    <h3>All Phone List</h3>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Status</th>
            <th>Action Edit</th>
        </tr>
        @foreach($phones as $phone)
        <tr>
            <td>{{ $phone->id }}</td>
            <td>{{ $phone->name }}</td>
            <td>{{ $phone->status }}</td>
            <td>
                <a href="/admin/phones/edit/{{ $phone->id }}" class="btn">Edit specs</a>
                <form action="/admin/phones/delete/{{ $phone->id }}" method="POST" style="display:inline;">
                    @csrf
                    <button type="submit" style="background:red;">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection