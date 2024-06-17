@extends('layout')

@section('title', 'Crear Categoría')

@section('content')
<h1>Crear Nueva Categoría</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('categories.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="name">Nombre</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="form-group">
        <label for="description">Descripción</label>
        <textarea class="form-control" id="description" name="description"></textarea>
    </div>
    <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="status" name="status">
        <label class="form-check-label" for="status">Activo</label>
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
</form>
@endsection
