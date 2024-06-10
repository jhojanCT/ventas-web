<?php

namespace App\Http\Controllers;

use App\Models\DetailEntry;
use Illuminate\Http\Request;

class DetailEntryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $detailEntries = DetailEntry::all();
        return view('detailEntries.index', [
            'detailEntries' => $detailEntries,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('detailEntries.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'entry_id' => 'required|exists:entries,id',
            'article_id' => 'required|exists:articles,id',
            'quantity' => 'required|integer|min:1',
            'price' => 'required|numeric|between:0,9999999999.99',
        ]);

        $detailEntry = DetailEntry::create($validatedData);

        return redirect()->route('detailEntries.index')
                         ->with('success', 'Detail Entry created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $detailEntry = DetailEntry::findOrFail($id);
        return view('detailEntries.show', [
            'detailEntry' => $detailEntry,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $detailEntry = DetailEntry::findOrFail($id);
        return view('detailEntries.edit', [
            'detailEntry' => $detailEntry,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'entry_id' => 'required|exists:entries,id',
            'article_id' => 'required|exists:articles,id',
            'quantity' => 'required|integer|min:1',
            'price' => 'required|numeric|between:0,9999999999.99',
        ]);

        $detailEntry = DetailEntry::findOrFail($id);
        $detailEntry->update($validatedData);

        return redirect()->route('detailEntries.index')
                         ->with('success', 'Detail Entry updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $detailEntry = DetailEntry::findOrFail($id);
        $detailEntry->delete();

        return redirect()->route('detailEntries.index')
                         ->with('success', 'Detail Entry deleted successfully');
    }
}
