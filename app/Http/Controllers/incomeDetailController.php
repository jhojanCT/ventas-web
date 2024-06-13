<?php

namespace App\Http\Controllers;

use App\Models\IncomeDetail;
use Illuminate\Http\Request;

class IncomeDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $incomeDetails = IncomeDetail::all();
        return view('IncomeDetails.Index', [
            'incomeDetails' => $incomeDetails,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('IncomeDetails.Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'entry_id' => 'required|integer',
            'article_id' => 'required|integer',
            'quantity' => 'required|integer',
            'price' => 'required|numeric',
        ]);

        $incomeDetail = IncomeDetail::create($validatedData);

        return redirect()->route('income-details.index')
                         ->with('success', 'Income Detail created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $incomeDetail = IncomeDetail::findOrFail($id);
        return view('IncomeDetails.Show', [
            'incomeDetail' => $incomeDetail,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $incomeDetail = IncomeDetail::findOrFail($id);
        return view('IncomeDetails.Edit', [
            'incomeDetail' => $incomeDetail,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'entry_id' => 'required|integer',
            'article_id' => 'required|integer',
            'quantity' => 'required|integer',
            'price' => 'required|numeric',
        ]);

        $incomeDetail = IncomeDetail::findOrFail($id);
        $incomeDetail->update($validatedData);

        return redirect()->route('income-details.index')
                         ->with('success', 'Income Detail updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $incomeDetail = IncomeDetail::findOrFail($id);
        $incomeDetail->delete();

        return redirect()->route('income-details.index')
                         ->with('success', 'Income Detail deleted successfully');
    }
}

