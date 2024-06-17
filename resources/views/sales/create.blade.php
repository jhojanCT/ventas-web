@extends('layout')

@section('title', 'Crear Venta')

@section('content')
<h1>Crear Nueva Venta</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('sales.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="customer_name">Nombre del Cliente</label>
        <input type="text" class="form-control" id="customer_name" name="customer_name" required>
    </div>
    <div class="form-group">
        <label for="product_name">Nombre del Producto</label>
        <input type="text" class="form-control" id="product_name" name="product_name" required>
    </div>
    <div class="form-group">
        <label for="quantity">Cantidad</label>
        <input type="number" class="form-control" id="quantity" name="quantity" required>
    </div>
    <div class="form-group">
        <label for="amount">Monto</label>
        <input type="number" step="0.01" class="form-control" id="amount" name="amount" required>
    </div>
    <div class="form-group">
        <label for="sale_date">Fecha de Venta</label>
        <input type="date" class="form-control" id="sale_date" name="sale_date" required>
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
</form>
@endsection
