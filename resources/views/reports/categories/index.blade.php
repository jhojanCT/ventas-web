
@extends('layout')

@section('title', 'reporte de Artículos')
@section('content')



    <a href="{{ route('reports.categories.pdf') }}" class="btn btn-primary mb-3">descargar pdf</a>


    {{-- <link rel="stylesheet" href="{{ asset('css/styles.css') }}"> --}}
   
</head>
<div class="pdf-container">
    <h1 class="pdf-title">Reporte Categorias</h1>

    <table class="pdf-table">
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

    <style>

/* css pdf */
.pdf-container {
    width: 100%;
    max-width: 800px;
    margin: auto;
    padding: 20px;
    background-color: #f9f9f9;
    border: 1px solid #ddd;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.pdf-title {
    text-align: center;
    margin-bottom: 20px;
    color: #333;
}
.pdf-table {
    width: 100%;
    border-collapse: collapse;
}

.pdf-table thead {
    background-color: #e0e0e0;
}

.pdf-table thead th {
    padding: 10px;
    border: 1px solid #ccc; 
    text-align: left;
    font-weight: bold;
    color: #333;
}
.pdf-table tbody tr {
    background-color: #fff;
}

.pdf-table tbody td {
    padding: 10px;
    border: 1px solid #ccc;
}

.pdf-table tbody tr:nth-child(even) {
    background-color: #f2f2f2; 
}


.pdf-table tbody tr td[colspan="5"] {
    text-align: center;
    font-style: italic;
    color: #777;
}
.pdf-table tbody td:nth-child(4) {
    text-transform: capitalize; 
}

        
            </style>



@endsection
