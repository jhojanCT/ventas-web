@extends('layout')

@section('title', 'Lista de Detalles de Venta')

@section('content')
    <h1>Detalles de Venta</h1>
    <a href="{{ route('detail-sales.create') }}" class="btn btn-primary mb-3">Nuevo Detalle de Venta</a>

    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Venta</th>
                <th>Artículo</th>
                <th>Cantidad</th>
                <th>Precio</th>
                <th>Descuento</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($detailSales as $detailSale)
                <tr>
                    <td>{{ $detailSale->id }}</td>
                    <td>{{ $detailSale->sale->id }}</td>
                    <td>{{ $detailSale->article->name }}</td>
                    <td>{{ $detailSale->quantity }}</td>
                    <td>{{ $detailSale->price }}</td>
                    <td>{{ $detailSale->discount }}</td>
                    <td>
                        <a href="{{ route('detail-sales.edit', $detailSale->id) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('detail-sales.destroy', $detailSale->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de que deseas eliminar este detalle de venta?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7">No hay detalles de ventas registrados.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
