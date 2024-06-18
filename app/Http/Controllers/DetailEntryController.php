<?php

namespace App\Http\Controllers;

use App\Models\DetailEntry;
use App\Models\Entry;
use App\Models\Article;
use Illuminate\Http\Request;

class DetailEntryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $detailEntries = DetailEntry::all();
        return view('detailEntries.index', compact('detailEntries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $entries = Entry::all();
        $articles = Article::all();

        return view('detailEntries.create', compact('entries', 'articles'));
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
        return view('detailEntries.show', compact('detailEntry'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $detailEntry = DetailEntry::findOrFail($id);
        $entries = Entry::all();
        $articles = Article::all();

        return view('detailEntries.edit', compact('detailEntry', 'entries', 'articles'));
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
