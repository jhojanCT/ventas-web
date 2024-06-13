@extends('layout')

@section('title', 'Lista de Usuarios')

@section('content')
<div class="container">
    <h1>Lista de Usuarios</h1>

    <a href="{{ route('users.create') }}" class="btn btn-primary mb-3">Crear Nuevo Usuario</a>

    <table class="table">
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
            @forelse ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->role->name }}</td>
                <td>
                    <a href="{{ route('users.show', $user->id) }}" class="btn btn-info btn-sm">Ver</a>
                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de que deseas eliminar este usuario?')">Eliminar</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5">No se encontraron usuarios.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
