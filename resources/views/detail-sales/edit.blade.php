@extends('layout')

@section('title', 'Editar Detalle de Venta')

@section('content')
<h1>Editar Detalle de Venta</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('detail-sales.update', $detailSale->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="sale_id">Venta</label>
        <select class="form-control" id="sale_id" name="sale_id" required>
            <option value="">Seleccione una Venta</option>
            @foreach($sales as $sale)
                <option value="{{ $sale->id }}" {{ $detailSale->sale_id == $sale->id ? 'selected' : '' }}>
                    {{ $sale->id }} - {{ $sale->client->name }}
                </option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="article_id">Artículo</label>
        <select class="form-control" id="article_id" name="article_id" required>
            <option value="">Seleccione un Artículo</option>
            @foreach($articles as $article)
                <option value="{{ $article->id }}" {{ $detailSale->article_id == $article->id ? 'selected' : '' }}>
                    {{ $article->name }}
                </option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="quantity">Cantidad</label>
        <input type="number" class="form-control" id="quantity" name="quantity" value="{{ $detailSale->quantity }}" required>
    </div>
    <div class="form-group">
        <label for="price">Precio</label>
        <input type="number" step="0.01" class="form-control" id="price" name="price" value="{{ $detailSale->price }}" required>
    </div>
    <div class="form-group">
        <label for="discount">Descuento</label>
        <input type="number" step="0.01" class="form-control" id="discount" name="discount" value="{{ $detailSale->discount }}" required>
    </div>
    <button type="submit" class="btn btn-primary">Guardar Cambios</button>
</form>
@endsection
