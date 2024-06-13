@extends('layout')

@section('title', 'Editar Usuario')

@section('content')
    <h1>Editar Usuario</h1>
    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="name">Nombre:</label>
        <input type="text" name="name" id="name" value="{{ $user->name }}" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="{{ $user->email }}" required><br>

        <label for="role_id">Rol:</label>
        <select name="role_id" id="role_id" required>
            @foreach($roles as $role)
                <option value="{{ $role->id }}" {{ $user->role_id == $role->id ? 'selected' : '' }}>{{ $role->name }}</option>
            @endforeach
        </select><br>

        <button type="submit">Guardar Cambios</button>
    </form>
@endsection
