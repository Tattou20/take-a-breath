<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    public function index()
    {
        // Retrieve all services from the database
        $services = Service::all();
        return view('services.index', ['services' => $services]);
    }

    public function create()
    {
        // Show the form to create a new service
        return view('services.create');
    }

    public function store(Request $request)
    {
        // Validate and store the newly created service
        $validatedData = $request->validate([
            'name' => 'required',
            // Add validation rules for other fields
        ]);

        Service::create($validatedData);

        return redirect()->route('services.index')->with('success', 'Service created successfully');
    }

    public function edit($id)
    {
        // Retrieve the service from the database and show the edit form
        $service = Service::findOrFail($id);
        return view('services.edit', ['service' => $service]);
    }

    public function update(Request $request, $id)
    {
        // Validate and update the existing service
        $validatedData = $request->validate([
            'name' => 'required',
            // Add validation rules for other fields
        ]);

        $service = Service::findOrFail($id);
        $service->update($validatedData);

        return redirect()->route('services.index')->with('success', 'Service updated successfully');
    }

    public function destroy($id)
    {
        // Delete the specified service
        $service = Service::findOrFail($id);
        $service->delete();

        return redirect()->route('services.index')->with('success', 'Service deleted successfully');
    }
}
