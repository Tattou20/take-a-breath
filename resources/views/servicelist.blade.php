@extends('template')

@section('content')

<div class="services">
    <div class="section1">
        
        <div id="services-list">
        <div class="search-filters">
        <input type="text" id="searchInput" placeholder="Search services...">
        <div class="filters">
            <label for="category">Category:</label>
            <select id="category">
                <option value="all">All</option>
                <option value="Plumbing">Plumbing</option>
                <option value="Electrician">Electrician</option>
                <option value="Cleaning">Cleaning</option>
                <option value="Carpenter">Carpenter</option>
                <option value="Babysitting">Babysitting</option>
                <option value="Painter">Painter</option>
            </select>
            
            <label for="city">City:</label>
            <select id="city">
                <option value="all">All</option>
                <option value="Toronto">Toronto</option>
                <option value="Ottawa">Ottawa</option>
                <option value="Quebec">Quebec</option>
                <option value="Vancouver">Vancouver</option>  
                <option value="Montreal">Montreal</option>   
 
        </select>
        </div>
        </div>
            <!-- Display only the names initially -->
            @foreach ($data as $service)
                <div class="service-container" data-category="{{ $service['category'] }}" data-city="{{ $service['city'] }}">
                    <p class="service-name">{{ $service['name'] }} | {{ $service['category'] }} | {{ $service['hourly_rate'] }}$/hour  | {{ $service['city'] }}</p>
                    <br/>

                    <div class="list-service-inside">
                    <img src="{{ asset('img/tab4.png') }}" alt="Plumbing" style="height: 100px; width: 100px;">

                    <div class="service-info">
                        <!-- Display all information, hidden initially -->
                        <p><strong>Name:</strong> {{ $service['name'] }}</p>
                        <p><strong>Description:</strong> {{ $service['description'] }}</p>
                        <p><strong>Contact Number:</strong> {{ $service['contact_number'] }}</p>
                        <p><strong>Email:</strong> {{ $service['email'] }}</p>
                        <p><strong>Category:</strong> {{ $service['category'] }}</p>
                        <p><strong>Hourly Rate:</strong> {{ $service['hourly_rate'] }}$</p>
                        <p><strong>City:</strong> {{ $service['city'] }}</p>
                        <p><strong>Availability:</strong> {{ $service['availability'] }}</p>
                    </div>
                    </div>
                </div>
            @endforeach
        </div>
        
        <div class="list-img">
      
            <img src="{{ asset('img/tab3.png') }}" alt="Plumbing" style="height: 900px; width: 850px;">
        </div>
    </div>
</div>



<script>
    const categoryFilter = document.getElementById('category');
    const cityFilter = document.getElementById('city');
    const searchInput = document.getElementById('searchInput');
    const serviceContainers = document.querySelectorAll('.service-container');
    const cityLinks = document.querySelectorAll('.city-link');

    categoryFilter.addEventListener('change', filterServices);
    cityFilter.addEventListener('change', filterServices);
    searchInput.addEventListener('input', filterServices);
    cityLinks.forEach(link => link.addEventListener('click', filterByCity));

    function filterServices() {
        const category = categoryFilter.value.toLowerCase();
        const city = cityFilter.value.toLowerCase();
        const searchTerm = searchInput.value.toLowerCase();

        serviceContainers.forEach(service => {
            const serviceCategory = service.dataset.category.toLowerCase();
            const serviceCity = service.dataset.city.toLowerCase();
            const serviceName = service.querySelector('.service-name').innerText.toLowerCase();

            const categoryMatch = category === 'all' || serviceCategory === category;
            const cityMatch = city === 'all' || serviceCity === city;
            const searchMatch = serviceName.includes(searchTerm);

            if (categoryMatch && cityMatch && searchMatch) {
                service.style.display = 'block';
            } else {
                service.style.display = 'none';
            }
        });
    }

    function filterByCity(event) {
        event.preventDefault();
        const selectedCity = this.dataset.city.toLowerCase();
        cityFilter.value = selectedCity;
        filterServices();
    }
</script>

@endsection
