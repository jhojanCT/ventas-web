<?php

namespace App\Http\Controllers;

use App\Models\Entry;
use App\Models\Person;  // Asegúrate de importar el modelo Person
use App\Models\User;    // Asegúrate de importar el modelo User
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class EntryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $entries = Entry::all();
        return view('entries.index', ['entries' => $entries]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $suppliers = Person::where('person_type', 'supplier')->get(); // Ajusta esto según tu lógica
        $users = User::all();
        return view('entries.create', compact('suppliers', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'supplier_id' => 'required|exists:persons,id',
            'user_id' => 'required|exists:users,id',
            'voucher_type' => 'required|string|max:20',
            'voucher_series' => 'nullable|string|max:7',
            'voucher_number' => 'required|string|max:10',
            'date_time' => 'required|date',
            'tax' => 'required|numeric|between:0,99.99',
            'total' => 'required|numeric|between:0,9999999999.99',
            'status' => 'required|string|max:20',
        ]);

        Entry::create($validatedData);

        return redirect()->route('entries.index')
                         ->with('success', 'Entry created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $entry = Entry::findOrFail($id);
        return view('entries.show', ['entry' => $entry]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $entry = Entry::findOrFail($id);
        $suppliers = Person::where('person_type', 'supplier')->get();
        $users = User::all();
    
        // Asegura que `date_time` sea un objeto Carbon
        $entry->date_time = Carbon::parse($entry->date_time);
    
        return view('entries.edit', compact('entry', 'suppliers', 'users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'supplier_id' => 'required|exists:persons,id',
            'user_id' => 'required|exists:users,id',
            'voucher_type' => 'required|string|max:20',
            'voucher_series' => 'nullable|string|max:7',
            'voucher_number' => 'required|string|max:10',
            'date_time' => 'required|date',
            'tax' => 'required|numeric|between:0,99.99',
            'total' => 'required|numeric|between:0,9999999999.99',
            'status' => 'required|string|max:20',
        ]);

        $entry = Entry::findOrFail($id);
        $entry->update($validatedData);

        return redirect()->route('entries.index')
                         ->with('success', 'Entry updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $entry = Entry::findOrFail($id);
        $entry->delete();

        return redirect()->route('entries.index')
                         ->with('success', 'Entry deleted successfully');
    }
}
