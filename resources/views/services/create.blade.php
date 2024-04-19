<h1>Add New Service</h1>
<form method="POST" action="{{ route('services.store') }}">
    @csrf
    <input type="text" name="name" placeholder="Service Name"><br>
    <input type="text" name="price" placeholder="Service Price"><br>
    <!-- Add more input fields for other attributes -->
    <button type="submit">Submit</button>
</form>
