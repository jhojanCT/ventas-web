@extends('layout')

@section('title', 'Listado de Artículos')

@section('content')
<div class="d-flex justify-content-between mb-3">
    <h1>Listado de Artículos</h1>
    <a href="{{ route('articles.create') }}" class="btn btn-primary">Nuevo Artículo</a>
</div>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Categoría</th>
            <th>Precio</th>
            <th>Stock</th>
            <th>Estado</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($articles as $article)
            <tr>
                <td>{{ $article->id }}</td>
                <td>{{ $article->name }}</td>
                <td>{{ $article->category ? $article->category->name : 'Sin Categoría' }}</td>
                <td>{{ $article->sale_price }}</td>
                <td>{{ $article->stock }}</td>
                <td>{{ $article->status ? 'Activo' : 'Inactivo' }}</td>
                <td>
                    <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('articles.destroy', $article->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de que deseas eliminar este articulo?')">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection

