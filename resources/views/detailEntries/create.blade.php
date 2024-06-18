@extends('layout')

@section('title', 'Crear Nuevo Detalle de Entrada')

@section('content')
    <h1>Crear Nuevo Detalle de Entrada</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('detailEntries.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="entry_id">Entrada</label>
            <select class="form-control" id="entry_id" name="entry_id" required>
                <option value="">Seleccione una Entrada</option>
                @foreach($entries as $entry)
                    <option value="{{ $entry->id }}">{{ $entry->id }} - {{ $entry->voucher_number }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="article_id">Artículo</label>
            <select class="form-control" id="article_id" name="article_id" required>
                <option value="">Seleccione un Artículo</option>
                @foreach($articles as $article)
                    <option value="{{ $article->id }}">{{ $article->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="quantity">Cantidad</label>
            <input type="number" class="form-control" id="quantity" name="quantity" required>
        </div>
        <div class="form-group">
            <label for="price">Precio</label>
            <input type="number" step="0.01" class="form-control" id="price" name="price" required>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection
