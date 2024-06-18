<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use App\Models\Person;
use App\Models\User;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    public function index()
    {
        $sales = Sale::all();
        return view('sales.index', compact('sales'));
    }

    public function create()
    {
        $persons = Person::all();
        $users = User::all();
        return view('sales.create', compact('persons', 'users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'client_id' => 'required|exists:persons,id',
            'user_id' => 'required|exists:users,id',
            'voucher_type' => 'required|string|max:255',
            'voucher_series' => 'nullable|string|max:255',
            'voucher_number' => 'required|string|max:255',
            'date_time' => 'required|date',
            'tax' => 'required|numeric',
            'total' => 'required|numeric',
            'status' => 'required|string|max:255',
        ]);

        Sale::create($request->all());

        return redirect()->route('sales.index');
    }

    public function edit(Sale $sale)
    {
        $persons = Person::all();
        $users = User::all();
        return view('sales.edit', compact('sale', 'persons', 'users'));
    }

    public function update(Request $request, Sale $sale)
    {
        $request->validate([
            'client_id' => 'required|exists:persons,id',
            'user_id' => 'required|exists:users,id',
            'voucher_type' => 'required|string|max:255',
            'voucher_series' => 'nullable|string|max:255',
            'voucher_number' => 'required|string|max:255',
            'date_time' => 'required|date',
            'tax' => 'required|numeric',
            'total' => 'required|numeric',
            'status' => 'required|string|max:255',
        ]);

        $sale->update($request->all());

        return redirect()->route('sales.index');
    }

    public function destroy(Sale $sale)
    {
        $sale->delete();
        return redirect()->route('sales.index');
    }
}
