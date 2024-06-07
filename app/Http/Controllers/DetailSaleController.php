<?php

namespace App\Http\Controllers;

use App\Models\DetailSale;
use Illuminate\Http\Request;

class DetailSaleController extends Controller
{
    public function index()
    {
        $DetailSales = DetailSale::all();
        return view('detail-sales.index', ['DetailSales'=> $DetailSales]);
    }

    public function create()
    {
        return view('detail-sales.create');
    }

    public function store(Request $request)
    {
        $DetailSale = new DetailSale($request->all());
        $DetailSale->save();
        return redirect()->route('detail-sales.index');
    }

    public function show(DetailSale $DetailSale)
    {
        return view('detail-sales.show', ['DetailSale'=> $DetailSale]);
    }

    public function edit(DetailSale $DetailSale)
    {
        return view('detail-sales.edit', ['DetailSale'=> $DetailSale]);
    }

    public function update(Request $request, DetailSale $DetailSale)
    {
        $DetailSale->update($request->all());
        return redirect()->route('detail-sales.index');
    }

    public function destroy(DetailSale $DetailSale)
    {
        $DetailSale->delete();
        return redirect()->route('detail-sales.index');
    }
}
