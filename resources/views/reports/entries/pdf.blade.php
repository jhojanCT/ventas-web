<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte de Entradas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 14px;
        }
        h2 {
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        table, th, td {
            border: 1px solid black;
            padding: 8px;
            font-size: 10px; 
        }
        th {
            background-color: #f2f2f2;
        }
        td ul {
            margin: 0;
            padding: 0;
        }
        td ul li {
            list-style-type: none;
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
    <h2>Reporte de Entradas</h2>
    <table>
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
                @foreach ($entry->detailEntries as $detailEntry)
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
                        <td>{{ $detailEntry->article->name }}</td> 
                    </tr>
                @endforeach
            @endforeach
        </tbody>
    </table>
</body>
</html>
