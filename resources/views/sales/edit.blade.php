@extends('layout')

@section('title', 'Editar Venta')

@section('content')
    <h1>Editar Venta</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('sales.update', $sale->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="client_id">ID del Cliente</label>
            <input type="text" class="form-control" id="client_id" name="client_id" value="{{ $sale->client_id }}" required>
        </div>
        <div class="form-group">
            <label for="user_id">ID del Usuario</label>
            <input type="text" class="form-control" id="user_id" name="user_id" value="{{ $sale->user_id }}" required>
        </div>
        <div class="form-group">
            <label for="voucher_type">Tipo de Comprobante</label>
            <input type="text" class="form-control" id="voucher_type" name="voucher_type" value="{{ $sale->voucher_type }}" required>
        </div>
        <div class="form-group">
            <label for="voucher_series">Serie de Comprobante</label>
            <input type="text" class="form-control" id="voucher_series" name="voucher_series" value="{{ $sale->voucher_series }}">
        </div>
        <div class="form-group">
            <label for="voucher_number">Número de Comprobante</label>
            <input type="text" class="form-control" id="voucher_number" name="voucher_number" value="{{ $sale->voucher_number }}" required>
        </div>
        <div class="form-group">
            <label for="date_time">Fecha y Hora</label>
            <input type="datetime-local" class="form-control" id="date_time" name="date_time" value="{{ \Carbon\Carbon::parse($sale->date_time)->format('Y-m-d\TH:i') }}" required>
        </div>
        <div class="form-group">
            <label for="tax">Impuesto</label>
            <input type="number" step="0.01" class="form-control" id="tax" name="tax" value="{{ $sale->tax }}" required>
        </div>
        <div class="form-group">
            <label for="total">Total</label>
            <input type="number" step="0.01" class="form-control" id="total" name="total" value="{{ $sale->total }}" required>
        </div>
        <div class="form-group">
            <label for="status">Estado</label>
            <input type="text" class="form-control" id="status" name="status" value="{{ $sale->status }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
    </form>
@endsection
