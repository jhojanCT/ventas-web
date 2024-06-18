<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Sales Report</title>
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
    <h1>Reportes de Ventas</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Cliente</th>
                <th>Tipo de Comprobante</th>
                <th>Número de Comprobante</th>
                <th>Fecha y Hora</th>
                <th>Total</th>
                <th>Estado</th>
                <th>Detalles</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sales as $sale)
                <tr>
                    <td>{{ $sale->id }}</td>
                    <td>{{ $sale->client->name }}</td>
                    <td>{{ $sale->voucher_type }}</td>
                    <td>{{ $sale->voucher_number }}</td>
                    <td>{{ $sale->date_time }}</td>
                    <td>{{ $sale->total }}</td>
                    <td>{{ $sale->status }}</td>
                    <td>
                        <ul>
                            @foreach ($sale->detailSales as $detail)
                                <li>{{ $detail->article->name }} - Quantity: {{ $detail->quantity }}, Price: {{ $detail->price }}, Discount: {{ $detail->discount }}</li>
                            @endforeach
                        </ul>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
