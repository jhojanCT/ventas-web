
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pdf reporte</title>
    {{-- <link rel="stylesheet" href="{{ asset('css/styles.css') }}"> --}}
    <style>

.container {
    width: 100%;
    max-width: 800px;
    margin: auto;
    padding: 20px;
    background-color: #f9f9f9;
    border: 1px solid #ddd;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.container h1 {
    text-align: center;
    margin-bottom: 20px;
    color: #333;
}

.table {
    width: 100%;
    border-collapse: collapse;
}

.table thead {
    background-color: #e0e0e0; 
}
.table thead th {
    padding: 10px;
    border: 1px solid #ccc;
    text-align: left;
    font-weight: bold;
    color: #333;
}

.table tbody tr {
    background-color: #fff;
}

.table tbody td {
    padding: 10px;
    border: 1px solid #ccc; 
}

.table tbody tr:nth-child(even) {
    background-color: #f2f2f2; 
}

.table tbody tr td[colspan="5"] {
    text-align: center;
    font-style: italic;
    color: #777;
}
.table tbody td:nth-child(4) {
    text-transform: capitalize; 
}


    </style>
</head>
<body>
    <div class="container">
        <h1>Reporte Categorias</h1>
    
        
    
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Estado</th>
                    <th>Articulos</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->description }}</td>
                    <td>{{ $category->status }}</td>
                    <td>
                        @foreach ($category->articles as $item)
                        {{$item->name}}<br>
                        @endforeach
                        
                      
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5">No categories found.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>


</body>
</html>
