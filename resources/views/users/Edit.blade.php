@extends('layout')

@section('title', 'Editar Usuario')

@section('content')
    <h1>Editar Usuario</h1>
    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="role_id">Rol:</label>
        <select name="role_id" id="role_id" required>
            @foreach($roles as $role)
                <option value="{{ $role->id }}" {{ $user->role_id == $role->id ? 'selected' : '' }}>{{ $role->name }}</option>
            @endforeach
        </select><br>

        <label for="name">Nombre:</label>
        <input type="text" name="name" id="name" value="{{ $user->name }}" required><br>

        <label for="document_type">Tipo de Documento:</label>
        <input type="text" name="document_type" id="document_type" value="{{ $user->document_type }}" required><br>

        <label for="document_number">Número de Documento:</label>
        <input type="text" name="document_number" id="document_number" value="{{ $user->document_number }}" required><br>

        <label for="address">Dirección:</label>
        <input type="text" name="address" id="address" value="{{ $user->address }}" required><br>

        <label for="phone">Teléfono:</label>
        <input type="text" name="phone" id="phone" value="{{ $user->phone }}" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="{{ $user->email }}" required><br>

        <label for="status">Estado:</label>
        <input type="text" name="status" id="status" value="{{ $user->status }}" required><br>

        <button type="submit">Guardar Cambios</button>
    </form>
@endsection
