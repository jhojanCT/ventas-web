<?php

namespace App\Http\Controllers;

use App\Models\Income;
use Illuminate\Http\Request;
use Inertia\Inertia;

class IncomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $incomes = Income::all();
        return Inertia::render('Incomes/Index', [
            'incomes' => $incomes,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Incomes/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'field1' => 'required|string',
            'field2' => 'required|numeric',
        ]);

        $income = Income::create($validatedData);

        return redirect()->route('incomes.index')
                         ->with('success', 'Income created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $income = Income::findOrFail($id);
        return Inertia::render('Incomes/Show', [
            'income' => $income,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $income = Income::findOrFail($id);
        return Inertia::render('Incomes/Edit', [
            'income' => $income,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'field1' => 'required|string',
            'field2' => 'required|numeric',
        ]);

        $income = Income::findOrFail($id);
        $income->update($validatedData);

        return redirect()->route('incomes.index')
                         ->with('success', 'Income updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $income = Income::findOrFail($id);
        $income->delete();

        return redirect()->route('incomes.index')
                         ->with('success', 'Income deleted successfully');
    }
}

