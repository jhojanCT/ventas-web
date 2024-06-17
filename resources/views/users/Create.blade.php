@extends('layout')

@section('title', 'Crear Usuario')

@section('content')
<h1>Crear Nuevo Usuario</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('users.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="role_id">Rol</label>
        <select class="form-control" id="role_id" name="role_id" required>
            @foreach($roles as $role)
                <option value="{{ $role->id }}">{{ $role->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="name">Nombre</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="form-group">
        <label for="document_type">Tipo de Documento</label>
        <input type="text" class="form-control" id="document_type" name="document_type" required>
    </div>
    <div class="form-group">
        <label for="document_number">Número de Documento</label>
        <input type="text" class="form-control" id="document_number" name="document_number" required>
    </div>
    <div class="form-group">
        <label for="address">Dirección</label>
        <input type="text" class="form-control" id="address" name="address" required>
    </div>
    <div class="form-group">
        <label for="phone">Teléfono</label>
        <input type="text" class="form-control" id="phone" name="phone" required>
    </div>
    <div class="form-group">
        <label for="email">Correo Electrónico</label>
        <input type="email" class="form-control" id="email" name="email" required>
    </div>
    <div class="form-group">
        <label for="password">Contraseña</label>
        <input type="password" class="form-control" id="password" name="password" required>
    </div>
    <div class="form-group">
        <label for="status">Estado</label>
        <input type="text" class="form-control" id="status" name="status" required>
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
</form>
@endsection
