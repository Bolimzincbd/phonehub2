@extends('layouts.app')

@section('content')
    <h2>Admin Manage Store Price List</h2>
    <a href="/admin" class="btn">Back Dashboard</a>
    <hr>

    <h3>Add Price For Phone</h3>
    <form action="/admin/prices/add" method="POST">
        @csrf
        Select Store: 
        <select name="store_id">
            @foreach($stores as $store) <option value="{{ $store->id }}">{{ $store->name }}</option> @endforeach
        </select>
        
        Select Phone: 
        <select name="phone_id">
            @foreach($phones as $phone) <option value="{{ $phone->id }}">{{ $phone->name }}</option> @endforeach
        </select>
        
        Price Money Number: <input type="number" step="0.01" name="price" required>
        Buy Link Address: <input type="text" name="link">
        <button type="submit">Save Add Price</button>
    </form>

    <hr>
    <h3>All Price Table</h3>
    <table>
        <tr>
            <th>ID</th>
            <th>Store Fix</th>
            <th>Phone Target</th>
            <th>Price Number</th>
            <th>Link Link</th>
            <th>Action Action</th>
        </tr>
        @foreach($prices as $price)
        <tr>
            <td>{{ $price->id }}</td>
            <td>{{ $price->store->name }}</td>
            <td>{{ $price->phone->name }}</td>
            <td>${{ $price->price }}</td>
            <td>{{ $price->link }}</td>
            <td>
                <form action="/admin/prices/delete/{{ $price->id }}" method="POST" style="display:inline;">
                    @csrf
                    <button type="submit" style="background:red;">Delete Price</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection