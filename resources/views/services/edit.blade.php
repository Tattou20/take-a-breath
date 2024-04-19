<h1>Edit Service</h1>
<form method="POST" action="{{ route('services.update', $service->id) }}">
    @csrf
    @method('PUT')
    <input type="text" name="name" value="{{ $service->name }}"><br>
    <input type="text" name="price" value="{{ $service->price }}"><br>
    <!-- Add more input fields for other attributes -->
    <button type="submit">Update</button>
</form>
