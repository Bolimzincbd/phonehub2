<div class="card">
    <img src="{{ asset('images/' . $phone->image_url) }}" alt="phone picture">
    <h4>{{ $phone->name }}</h4>
    <p><strong>Brand:</strong> {{ $phone->brand }}</p>
    <p><strong>Main Price:</strong> ${{ $phone->price }}</p>
    <p>RAM: {{ $phone->ram }} | Storage: {{ $phone->storage }}</p>
    
    <a href="/phone/{{ $phone->id }}" class="btn">View Detail</a>
    
    <form action="/compare/add/{{ $phone->id }}" method="POST" style="margin-top:5px;">
        @csrf
        <button type="submit">Add to Compare</button>
    </form>
</div>