@extends('layouts.app')

@section('content')
    <h2>Admin Manage News Blog</h2>
    <a href="/admin" class="btn">Back Dashboard</a>
    <hr>

    <h3>Add New Post Blog</h3>
    <form action="/admin/blogs/add" method="POST" enctype="multipart/form-data">
        @csrf
        Title Subject: <input type="text" name="title" required>
        
        Upload Blog Image: <input type="file" name="image_file" accept="image/*">
        
        Short Describe: <textarea name="short_description"></textarea>
        Full Story Word: <textarea name="content" style="height:150px;"></textarea>
        <button type="submit">Save Publish Blog</button>
    </form>

    <hr>
    <h3>All Post List</h3>
    <table>
        <tr>
            <th>ID</th>
            <th>Title Name</th>
            <th>Action Button</th>
        </tr>
        @foreach($blogs as $blog)
        <tr>
            <td>{{ $blog->id }}</td>
            <td>{{ $blog->title }}</td>
            <td>
                <a href="/admin/blogs/edit/{{ $blog->id }}" class="btn">Edit Post</a>
                <form action="/admin/blogs/delete/{{ $blog->id }}" method="POST" style="display:inline;">
                    @csrf
                    <button type="submit" style="background:red;">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection