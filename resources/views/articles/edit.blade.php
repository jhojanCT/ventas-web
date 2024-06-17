
@extends('layout')

@section('title', 'Crear Artículo')

@section('content')
<h1>Editar Artículo</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form method="POST" action="{{ route('articles.update', $article->id) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')


    <div class="form-group">
        <label for="name">Nombre</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $article->name) }}" required>
    </div>
 

    <div class="form-group">
        <label for="category_id">Categoría</label>
        <select class="form-control" id="category_id" name="category_id" required>
            @foreach($categories as $category)
                <option value="{{ $category->id }}" {{ old('category_id', $article->category_id) == $category->id ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="code">Código</label>
        <input type="text" class="form-control" id="code" name="code" value="{{ old('code', $article->code) }}" required>
    </div>
    <div class="form-group">
        <label for="sale_price">Precio de Venta</label>
        <input type="number" step="0.01" class="form-control" id="sale_price" name="sale_price" value="{{ old('sale_price', $article->sale_price) }}" required> 
    </div>
    <div class="form-group">
        <label for="stock">Stock</label>
        <input type="number" class="form-control" id="stock" name="stock" value="{{ old('stock', $article->stock) }}" required>
    </div>
    <div class="form-group">
        <label for="description">Descripción</label>
        <textarea class="form-control" id="description" name="description">{{ old('description', $article->description) }}</textarea>
    </div>
    <div class="form-group">
        <label for="image">Imagen</label>
        <input type="file" class="form-control-file" id="image" name="image">
    </div>
    <div class="form-group">
        <label for="status">Estado</label>
        <select class="form-control" id="status" name="status">
            <option value="active" {{ old('status') == 'active' ? 'selected' : '' }}>Activo</option>
            <option value="inactive" {{ old('status') == 'inactive' ? 'selected' : '' }}>Inactivo</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Guardar cambios</button>
</form>
@endsection
