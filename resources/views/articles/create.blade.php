@extends('layout')

@section('title', 'Crear Artículo')

@section('content')
<h1>Crear Nuevo Artículo</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('articles.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="name">Nombre</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="form-group">
        <label for="category_id">Categoría</label>
        <select class="form-control" id="category_id" name="category_id" required>
            @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="code">Código</label>
        <input type="text" class="form-control" id="code" name="code" required>
    </div>
    <div class="form-group">
        <label for="sale_price">Precio de Venta</label>
        <input type="number" step="0.01" class="form-control" id="sale_price" name="sale_price" required>
    </div>
    <div class="form-group">
        <label for="stock">Stock</label>
        <input type="number" class="form-control" id="stock" name="stock" required>
    </div>
    <div class="form-group">
        <label for="description">Descripción</label>
        <textarea class="form-control" id="description" name="description"></textarea>
    </div>
    <div class="form-group">
        <label for="image">Imagen</label>
        <input type="file" class="form-control-file" id="image" name="image">
    </div>
    <div class="form-group form-check">
        <input type="hidden" name="status" value="0">
        <input type="checkbox" class="form-check-input" id="status" name="status" value="1">
        <label class="form-check-label" for="status">Activo</label>
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
</form>
@endsection
