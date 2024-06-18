<?php

namespace App\Http\Controllers;

use App\Models\DetailSale;
use App\Models\Sale;
use App\Models\Article;
use Illuminate\Http\Request;

class DetailSaleController extends Controller
{
    public function index()
    {
        $detailSales = DetailSale::all();
        return view('detail-sales.index', compact('detailSales'));
    }

    public function create()
    {
        $sales = Sale::all();
        $articles = Article::all();
        return view('detail-sales.create', compact('sales', 'articles'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'sale_id' => 'required|exists:sales,id',
            'article_id' => 'required|exists:articles,id',
            'quantity' => 'required|numeric',
            'price' => 'required|numeric',
            'discount' => 'required|numeric',
        ]);

        DetailSale::create($request->all());

        return redirect()->route('detail-sales.index');
    }

    public function show(DetailSale $detailSale)
    {
        return view('detail-sales.show', compact('detailSale'));
    }

    public function edit(DetailSale $detailSale)
    {
        $sales = Sale::all();
        $articles = Article::all();
        return view('detail-sales.edit', compact('detailSale', 'sales', 'articles'));
    }

    public function update(Request $request, DetailSale $detailSale)
    {
        $request->validate([
            'sale_id' => 'required|exists:sales,id',
            'article_id' => 'required|exists:articles,id',
            'quantity' => 'required|numeric',
            'price' => 'required|numeric',
            'discount' => 'required|numeric',
        ]);

        $detailSale->update($request->all());

        return redirect()->route('detail-sales.index');
    }

    public function destroy(DetailSale $detailSale)
    {
        $detailSale->delete();
        return redirect()->route('detail-sales.index');
    }
}
