@extends('layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h1>Reporte Entradas</h1>
                </div>

                <div class="card-body">
                    <div style="margin-bottom: 20px;">
                        <a href="{{ route('reports.entries.pdf') }}" class="btn btn-primary" target="_blank">Imprimir PDF</a>
                    </div>

                    <table border="1">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Proveedor</th>
                                <th>Usuario</th>
                                <th>Tipo de Comprobante</th>
                                <th>Serie</th>
                                <th>Número</th>
                                <th>Fecha y Hora</th>
                                <th>Impuesto (%)</th>
                                <th>Total</th>
                                <th>Estado</th>
                                <th>Artículo</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($entries as $entry)
                            <tr>
                                <td>{{ $entry->id }}</td>
                                <td>{{ $entry->supplier ? $entry->supplier->name : 'Proveedor no encontrado' }}</td>
                                <td>{{ $entry->user ? $entry->user->name : 'Usuario no encontrado' }}</td>
                                <td>{{ $entry->voucher_type }}</td>
                                <td>{{ $entry->voucher_series }}</td>
                                <td>{{ $entry->voucher_number }}</td>
                                <td>{{ $entry->date_time }}</td>
                                <td>{{ $entry->tax }}</td>
                                <td>{{ $entry->total }}</td>
                                <td>{{ $entry->status }}</td>
                                <td>
                                    @foreach ($entry->detailEntries as $detail)
                                        {{ $detail->article ? $detail->article->name : 'Artículo no encontrado' }}
                                        <br>
                                    @endforeach
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
