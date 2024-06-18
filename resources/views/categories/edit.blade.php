@extends('layout')

@section('title', 'Crear Artículo')

@section('content')
<h1>Editar Categoria</h1>


<form action="{{ route('categories.update', $category->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="name">Nombre</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $category->name) }}" >
        @if($errors->has('name'))
            <div class="error">{{ $errors->first('name') }}</div>
        @endif
        <br>
    </div>
    
    <div class="form-group">
        <label for="description">Descripción</label>
        <textarea class="form-control" id="description" name="description" row="3" cols="80">{{ old('description', $category->description) }}</textarea>
        @if($errors->has('description'))
        <div class="error">{{ $errors->first('description') }}</div>
    @endif
    </div>
    
    <div class="form-group">
        <label for="status">Estado</label>
        <select class="form-control" id="status" name="status">
            <option value="active" {{ old('status', $category->status) == 'active' ? 'selected' : '' }}>Activo</option>
            <option value="inactive" {{ old('status', $category->status) == 'inactive' ? 'selected' : '' }}>Inactivo</option>

        </select>
    </div>

    <button type="submit" class="btn btn-primary">Guardar</button>
</form>

@endsection
