@extends('layout')

@section('content')
<div class="container">
    <h1>Categories</h1>

    <a href="{{ route('categories.create') }}" class="btn btn-primary mb-3">Nueva Categoria</a>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Estado</th>
                <th>Articulos</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
                <td>{{ $category->description }}</td>
                <td>{{ $category->status }}</td>
                <td>
                    @foreach ($category->articles as $item)
                    {{$item->name}}<br>
                    @endforeach
                    
                  
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5">No categories found.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection