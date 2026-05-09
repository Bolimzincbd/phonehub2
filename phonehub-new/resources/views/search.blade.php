@extends('layouts.app')

@section('content')
    <h2>Search and Filter Phones</h2>
    <p>Find the best phone by choosing what you want below.</p>
    <hr>

    <div class="search-container">
        <div class="search-sidebar">
            <form action="/search" method="GET">
                
                <label><strong>Search Phone Name:</strong></label>
                <input type="text" name="q" placeholder="Type name..." value="{{ request('q') }}">

                <label><strong>Brand:</strong></label>
                <select name="brand">
                    <option value="">-- All Brand --</option>
                    @foreach($brands as $brand)
                        <option value="{{ $brand }}" @if(request('brand') == $brand) selected @endif>{{ $brand }}</option>
                    @endforeach
                </select>

                <label><strong>Operating System:</strong></label>
                <select name="os">
                    <option value="">-- All OS --</option>
                    @foreach($osList as $os)
                        <option value="{{ $os }}" @if(request('os') == $os) selected @endif>{{ $os }}</option>
                    @endforeach
                </select>

                <label><strong>RAM Memory:</strong></label>
                <select name="ram">
                    <option value="">-- All RAM --</option>
                    @foreach($rams as $ram)
                        <option value="{{ $ram }}" @if(request('ram') == $ram) selected @endif>{{ $ram }}</option>
                    @endforeach
                </select>

                <label><strong>Storage Size:</strong></label>
                <select name="storage">
                    <option value="">-- All Storage --</option>
                    @foreach($storages as $storage)
                        <option value="{{ $storage }}" @if(request('storage') == $storage) selected @endif>{{ $storage }}</option>
                    @endforeach
                </select>

                <label><strong>Price Range ($):</strong></label>
                <div style="display: flex; gap: 5px; margin-top: 5px; margin-bottom: 15px;">
                    <input type="number" name="min_price" placeholder="Min" style="margin: 0;" value="{{ request('min_price') }}">
                    <span style="align-self: center;">to</span>
                    <input type="number" name="max_price" placeholder="Max" style="margin: 0;" value="{{ request('max_price') }}">
                </div>

                <button type="submit" style="width: 100%; margin-bottom: 10px; background: blue;">Apply Filters</button>
                <a href="/search" class="btn" style="width: 100%; background: red; text-align: center; box-sizing: border-box;">Reset / Clear</a>
            </form>
        </div>

        <div class="search-main">
            <h3>Search Result Found: {{ count($phones) }} Phone(s)</h3>
            
            @if(count($phones) == 0)
                <p style="color: red;">Sorry, no phone match your filter. Please try change filter again.</p>
            @else
                <div class="card-box">
                    @foreach($phones as $phone)
                        @include('partials.phone_card', ['phone' => $phone])
                    @endforeach
                </div>
            @endif
        </div>
    </div>

@endsection