@extends('layouts.app')

@section('content')

    <h2>Side by Side Phone Compare</h2>
    <p>You can put 3 phone here to look specs.</p>

    @if(count($phones) == 0)
        <p>No phone inside compare right now. Go home to add.</p>
    @else
        <table>
            <tr>
                <th>Specs Name</th>
                @foreach($phones as $phone)
                    <th>
                        <img src="{{ asset('images/' . $phone->image_url) }}" width="100"><br>
                        {{ $phone->name }}
                        <form action="/compare/remove/{{ $phone->id }}" method="POST" style="margin-top:5px;">
                            @csrf
                            <button type="submit" style="background:red;">Remove Out</button>
                        </form>
                    </th>
                @endforeach
            </tr>
            <tr>
                <td><strong>Brand</strong></td>
                @foreach($phones as $phone) <td>{{ $phone->brand }}</td> @endforeach
            </tr>
            <tr>
                <td><strong>Price Money</strong></td>
                @foreach($phones as $phone) <td>${{ $phone->price }}</td> @endforeach
            </tr>
            <tr>
                <td><strong>OS System</strong></td>
                @foreach($phones as $phone) <td>{{ $phone->os }}</td> @endforeach
            </tr>
            <tr>
                <td><strong>Processor Brain</strong></td>
                @foreach($phones as $phone) <td>{{ $phone->processor }}</td> @endforeach
            </tr>
            <tr>
                <td><strong>RAM</strong></td>
                @foreach($phones as $phone) <td>{{ $phone->ram }}</td> @endforeach
            </tr>
            <tr>
                <td><strong>Storage</strong></td>
                @foreach($phones as $phone) <td>{{ $phone->storage }}</td> @endforeach
            </tr>
            <tr>
                <td><strong>Camera</strong></td>
                @foreach($phones as $phone) <td>{{ $phone->camera }}</td> @endforeach
            </tr>
            <tr>
                <td><strong>Battery</strong></td>
                @foreach($phones as $phone) <td>{{ $phone->battery }}</td> @endforeach
            </tr>
            <tr>
                <td><strong>Screen Size</strong></td>
                @foreach($phones as $phone) <td>{{ $phone->screen_size }}</td> @endforeach
            </tr>
        </table>
    @endif

@endsection