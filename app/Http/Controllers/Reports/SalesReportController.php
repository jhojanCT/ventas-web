<?php

namespace App\Http\Controllers\Reports;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sale;
use Barryvdh\DomPDF\Facade\Pdf;


class SalesReportController extends Controller
{
    public function index()
    {
        $sales = Sale::with(['detailSales', 'client', 'user'])->get();
        return view('reports.sales.index', compact('sales'));
    }

    public function report()
    {
        $sales = Sale::with(['detailSales', 'client', 'user'])->get();

        $data = [
            'sales' => $sales,
        ];

        $pdf = Pdf::loadView('reports.sales.pdf', $data);
        return $pdf->stream();
    }
}
