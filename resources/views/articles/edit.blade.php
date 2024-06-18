@extends('layout')

@section('title', 'Editar Artículo')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Editar Artículo</div>

                <div class="card-body">
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

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Nombre</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name', $article->name) }}" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="category_id" class="col-md-4 col-form-label text-md-right">Categoría</label>
                            <div class="col-md-6">
                                <select id="category_id" class="form-control" name="category_id" required>
                                    @foreach($categories as $category)
                                    <option value="{{ $category->id }}" {{ $category->id == $article->category_id ? 'selected' : '' }}>
                                        {{ $category->name }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="code" class="col-md-4 col-form-label text-md-right">Código</label>
                            <div class="col-md-6">
                                <input id="code" type="text" class="form-control" name="code" value="{{ old('code', $article->code) }}" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="sale_price" class="col-md-4 col-form-label text-md-right">Precio de Venta</label>
                            <div class="col-md-6">
                                <input id="sale_price" type="number" step="0.01" class="form-control" name="sale_price" value="{{ old('sale_price', $article->sale_price) }}" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="stock" class="col-md-4 col-form-label text-md-right">Stock</label>
                            <div class="col-md-6">
                                <input id="stock" type="number" class="form-control" name="stock" value="{{ old('stock', $article->stock) }}" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">Descripción</label>
                            <div class="col-md-6">
                                <textarea id="description" class="form-control" name="description" required>{{ old('description', $article->description) }}</textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="image" class="col-md-4 col-form-label text-md-right">Imagen</label>
                            <div class="col-md-6">
                                <input id="image" type="file" class="form-control-file" name="image">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="status" class="col-md-4 col-form-label text-md-right">Estado</label>
                            <div class="col-md-6">
                                <input id="status" type="checkbox" class="form-check-input" name="status" value="1" {{ $article->status ? 'checked' : '' }}>
                                <label class="form-check-label" for="status">Activo</label>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">Actualizar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
