@extends('layout')

@section('title', 'Editar Categoría')

@section('content')
<h1>Editar Categoría</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('categories.update', $category->id) }}" method="POST">
    @csrf
    @method('PUT') {{-- Usamos el método PUT para enviar el formulario como una actualización --}}

    <div class="form-group">
        <label for="name">Nombre</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $category->name) }}" required>
    </div>
    <div class="form-group">
        <label for="description">Descripción</label>
        <textarea class="form-control" id="description" name="description">{{ old('description', $category->description) }}</textarea>
    </div>
    <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="status" name="status" {{ $category->status ? 'checked' : '' }}>
        <label class="form-check-label" for="status">Activo</label>
    </div>
    <button type="submit" class="btn btn-primary">Actualizar</button>
</form>
@endsection
