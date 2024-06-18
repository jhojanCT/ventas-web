@extends('layout')

@section('content')
    <h1>Reporte de Ventas</h1>

    <div style="margin-bottom: 20px;">
        <a href="{{ route('reports.sales.pdf') }}" class="btn btn-primary" target="_blank">Imprimir PDF</a>
    </div>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Cliente</th>
                <th>Tipo de Comprobante</th>
                <th>Número de Comprobante</th>
                <th>Fecha y Hora</th>
                <th>Total</th>
                <th>Estado</th>
                <th>Detalles</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sales as $sale)
                <tr>
                    <td>{{ $sale->id }}</td>
                    <td>{{ $sale->client->name }}</td>
                    <td>{{ $sale->voucher_type }}</td>
                    <td>{{ $sale->voucher_number }}</td>
                    <td>{{ $sale->date_time }}</td>
                    <td>{{ $sale->total }}</td>
                    <td>{{ $sale->status }}</td>
                    <td>
                        <ul>
                            @foreach ($sale->detailSales as $detail)
                                <li>{{ $detail->article->name }} - Quantity: {{ $detail->quantity }}, Price: {{ $detail->price }}, Discount: {{ $detail->discount }}</li>
                            @endforeach
                        </ul>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
