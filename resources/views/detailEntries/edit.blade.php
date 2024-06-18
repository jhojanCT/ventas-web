@extends('layout')

@section('title', 'Editar Detalle de Entrada')

@section('content')
    <h1>Editar Detalle de Entrada</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('detailEntries.update', $detailEntry->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="entry_id">Entrada</label>
            <select class="form-control" id="entry_id" name="entry_id" required>
                @foreach($entries as $entry)
                    <option value="{{ $entry->id }}" {{ $detailEntry->entry_id == $entry->id ? 'selected' : '' }}>
                        {{ $entry->id }} - {{ $entry->voucher_number }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="article_id">Artículo</label>
            <select class="form-control" id="article_id" name="article_id" required>
                @foreach($articles as $article)
                    <option value="{{ $article->id }}" {{ $detailEntry->article_id == $article->id ? 'selected' : '' }}>
                        {{ $article->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="quantity">Cantidad</label>
            <input type="number" class="form-control" id="quantity" name="quantity" value="{{ $detailEntry->quantity }}" required>
        </div>
        <div class="form-group">
            <label for="price">Precio</label>
            <input type="number" step="0.01" class="form-control" id="price" name="price" value="{{ $detailEntry->price }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
@endsection
