@extends('layout')

@section('title', 'Lista de Ventas')

@section('content')
    <h1>Ventas</h1>
    <a href="{{ route('sales.create') }}" class="btn btn-primary mb-3">Nueva Venta</a>

    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Cliente</th>
                <th>Tipo de Comprobante</th>
                <th>Serie</th>
                <th>Número</th>
                <th>Fecha y Hora</th>
                <th>Impuesto</th>
                <th>Total</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sales as $sale)
                <tr>
                    <td>{{ $sale->id }}</td>
                    <td>{{ $sale->client->name }}</td>
                    <td>{{ $sale->voucher_type }}</td>
                    <td>{{ $sale->voucher_series }}</td>
                    <td>{{ $sale->voucher_number }}</td>
                    <td>{{ $sale->date_time }}</td>
                    <td>{{ $sale->tax }}</td>
                    <td>{{ $sale->total }}</td>
                    <td>{{ $sale->status }}</td>
                    <td>
                        <a href="{{ route('sales.edit', $sale->id) }}" class="btn btn-warning btn-sm">Editar</a>

                        <form action="{{ route('sales.destroy', $sale->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Estás seguro de querer eliminar esta venta?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
