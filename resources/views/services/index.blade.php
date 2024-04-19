<h1>List of Services</h1>
<ul>
    @foreach($services as $service)
        <li>{{ $service->name }} - {{ $service->price }}</li>
    @endforeach
</ul>
