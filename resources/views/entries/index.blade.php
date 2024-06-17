@extends('layout')

@section('content')
<div class="container">
    <h1>Entradas</h1>

    <a href="{{ route('entries.create') }}" class="btn btn-primary mb-3">Nueva Entrada</a>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Proveedor</th>
                <th>Usuario</th>
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
            @forelse ($entries as $entry)
            <tr>
                <td>{{ $entry->id }}</td>
                <td>{{ $entry->supplier->name }}</td>
                <td>{{ $entry->user->name }}</td>
                <td>{{ $entry->voucher_type }}</td>
                <td>{{ $entry->voucher_series }}</td>
                <td>{{ $entry->voucher_number }}</td>
                <td>{{ $entry->date_time }}</td>
                <td>{{ $entry->tax }}</td>
                <td>{{ $entry->total }}</td>
                <td>{{ $entry->status }}</td>
                <td>
                    <a href="{{ route('entries.edit', $entry->id) }}" class="btn btn-warning btn-sm">Editar</a>
                    
                    <form action="{{ route('entries.destroy', $entry->id) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de querer eliminar esta entrada?')">Eliminar</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="11">No se encontraron entradas.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
