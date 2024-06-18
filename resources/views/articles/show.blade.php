@extends('layout')

@section('title', 'Detalles de Usuario')

@section('content')
<div class="article-container">
    <div class="article-details">
        <h1>Detalles del Articulo</h1>
        <p><b>ID:</b> {{ $article->id }}</p>
        <p><b>Codigo:</b> {{ $article->code }}</p>
        <p><b>Nombre:</b> {{ $article->name }}</p>
        <p><b>Categoria:</b> {{ $article->category->name }}</p>
        <p><b>Stock:</b> {{ $article->stock }}</p>
        <p><b>Descripcion:</b><br> {{ $article->description }}</p>
        <p><b>Estado:</b> {{ $article->status }}</p>
    </div>
    @if($article->image)
   

    <div class="article-image">
        <img src="{{ asset('images/articles/' . $article->image) }}" alt="Imagen del articulo" class="img-responsive">
    </div>
@endif
</div>
    <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-warning btn-sm">Editar</a>


@endsection
