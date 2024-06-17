@extends('layout')

@section('content')
<div class="container">
    <h1>Detalles de Entradas</h1>

    <a href="{{ route('detailEntries.create') }}" class="btn btn-primary mb-3">Nuevo Detalle de Entrada</a>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Entrada</th>
                <th>Artículo</th>
                <th>Cantidad</th>
                <th>Precio Unitario</th>
                <th>Total</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($detailEntries as $detailEntry)
            <tr>
                <td>{{ $detailEntry->id }}</td>
                <td>{{ $detailEntry->entry->voucher_number }}</td>
                <td>{{ $detailEntry->article->name }}</td>
                <td>{{ $detailEntry->quantity }}</td>
                <td>{{ $detailEntry->price }}</td>
                <td>{{ $detailEntry->quantity * $detailEntry->price }}</td>
                <td>
                    <a href="{{ route('detailEntries.edit', $detailEntry->id) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('detailEntries.destroy', $detailEntry->id) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de que deseas eliminar este detalle de entrada?')">Eliminar</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="7">No se encontraron detalles de entrada.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
