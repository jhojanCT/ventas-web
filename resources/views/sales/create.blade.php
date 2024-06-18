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
        <label for="client_id">Cliente</label>
        <select class="form-control" id="client_id" name="client_id" required>
            <option value="">Seleccione un Cliente</option>
            @foreach($persons as $person)
                <option value="{{ $person->id }}">{{ $person->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="user_id">Usuario</label>
        <select class="form-control" id="user_id" name="user_id" required>
            <option value="">Seleccione un Usuario</option>
            @foreach($users as $user)
                <option value="{{ $user->id }}">{{ $user->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="voucher_type">Tipo de Comprobante</label>
        <input type="text" class="form-control" id="voucher_type" name="voucher_type" required>
    </div>
    <div class="form-group">
        <label for="voucher_series">Serie de Comprobante</label>
        <input type="text" class="form-control" id="voucher_series" name="voucher_series">
    </div>
    <div class="form-group">
        <label for="voucher_number">Número de Comprobante</label>
        <input type="text" class="form-control" id="voucher_number" name="voucher_number" required>
    </div>
    <div class="form-group">
        <label for="date_time">Fecha y Hora</label>
        <input type="datetime-local" class="form-control" id="date_time" name="date_time" required>
    </div>
    <div class="form-group">
        <label for="tax">Impuesto</label>
        <input type="number" step="0.01" class="form-control" id="tax" name="tax" required>
    </div>
    <div class="form-group">
        <label for="total">Total</label>
        <input type="number" step="0.01" class="form-control" id="total" name="total" required>
    </div>
    <div class="form-group">
        <label for="status">Estado</label>
        <input type="text" class="form-control" id="status" name="status" required>
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
</form>
@endsection
