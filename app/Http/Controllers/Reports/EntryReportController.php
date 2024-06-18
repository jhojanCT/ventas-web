<?php

namespace App\Http\Controllers\Reports;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Entry;
use App\Models\DetailEntry;
use Barryvdh\DomPDF\Facade\Pdf;

class EntryReportController extends Controller
{
    public function index()
    {
        $entries = Entry::with(['supplier', 'user'])->get();
        return view('reports.entries.index', compact('entries'));
    }

    public function report()
    {
        $entries = Entry::with(['supplier', 'user', 'detailEntries.article'])->get();

        $data = [
            'entries' => $entries,
        ];

        $pdf = PDF::loadView('reports.entries.pdf', $data);
        return $pdf->stream();
    }
}
