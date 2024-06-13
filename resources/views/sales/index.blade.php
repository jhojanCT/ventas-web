@extends('layout')

@section('title','ventas')

@section('content')
    <h1>Lista de ventas</h1>
    <a href="{{ route('sales.create') }}">Crear venta</a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Rol</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($sales as $sale)
                <tr>
                    <td>{{ $sale->id }}</td>
                    <td>{{ $sale->name }}</td>
                    <td>{{ $sale->email }}</td>
                    <td>{{ $sale->role->name }}</td>                    <td>
                        <a href="{{ route('sales.show', $sale->id) }}">Ver</a>
                        <a href="{{ route('sales.edit', $sale->id) }}">Editar</a>
                        <form action="{{ route('sales.destroy', $user->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
