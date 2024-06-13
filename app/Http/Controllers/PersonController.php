<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $persons = Person::all();
        return view('Persons.Index', [
            'persons' => $persons,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Persons.Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'person_type' => 'required|string|max:45',
            'name' => 'required|string|max:255',
            'document_type' => 'required|string|max:45',
            'document_number' => 'required|string|max:45',
            'address' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:45',
            'email' => 'required|email|max:255|unique:persons,email',
        ]);

        $person = Person::create($validatedData);

        return redirect()->route('persons.index')
                         ->with('success', 'Person created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $person = Person::findOrFail($id);
        return view('Persons.Show', [
            'person' => $person,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $person = Person::findOrFail($id);
        return view('Persons.Edit', [
            'person' => $person,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'person_type' => 'required|string|max:45',
            'name' => 'required|string|max:255',
            'document_type' => 'required|string|max:45',
            'document_number' => 'required|string|max:45',
            'address' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:45',
            'email' => 'required|email|max:255|unique:persons,email,' . $id,
        ]);

        $person = Person::findOrFail($id);
        $person->update($validatedData);

        return redirect()->route('persons.index')
                         ->with('success', 'Person updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $person = Person::findOrFail($id);
        $person->delete();

        return redirect()->route('persons.index')
                         ->with('success', 'Person deleted successfully');
    }
}
