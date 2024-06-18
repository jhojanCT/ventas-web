@extends('layout')

@section('title', 'Crear Artículo')

@section('content')
<h1>Crear Nuevo Artículo</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('articles.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="name">Nombre</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
    </div>
    <div class="form-group">
        <label for="category_id">Categoría</label>
        <select class="form-control" id="category_id" name="category_id" required>
            @foreach($categories as $category)
                <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="code">Código</label>
        <input type="text" class="form-control" id="code" name="code" value="{{ old('code') }}" required>
    </div>
    <div class="form-group">
        <label for="sale_price">Precio de Venta</label>
        <input type="number" step="0.01" class="form-control" id="sale_price" name="sale_price" value="{{ old('sale_price') }}" required>
    </div>
    <div class="form-group">
        <label for="stock">Stock</label>
        <input type="number" class="form-control" id="stock" name="stock" value="{{ old('stock') }}" required>
    </div>
    <div class="form-group">
        <label for="description">Descripción</label>
        <textarea class="form-control" id="description" name="description">{{ old('description') }}</textarea>
    </div>
    <div class="form-group">
        <label for="image">Imagen</label>

        <div id="image-preview"></div>
        <input type="file" id="image" name="image">
    </div>
    <div class="form-group">
        <label for="status">Estado</label>
        <select class="form-control" id="status" name="status">
            <option value="active" {{ old('status') == 'active' ? 'selected' : '' }}>Activo</option>
            <option value="inactive" {{ old('status') == 'inactive' ? 'selected' : '' }}>Inactivo</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Guardar</button>
</form>

<script>
    // Espera hasta que el DOM esté completamente cargado
    document.addEventListener('DOMContentLoaded', function () {
        // Obtener el input y el div de vista previa
        var imageInput = document.getElementById('image');
        var imagePreview = document.getElementById('image-preview');

        // Escuchar el evento change en el input
        imageInput.addEventListener('change', function () {
            // Comprobar si hay un archivo seleccionado
            if (this.files && this.files[0]) {
                // Crear un objeto FileReader
                var reader = new FileReader();

                // Definir la función a ejecutar una vez que se haya leído el archivo
                reader.onload = function (e) {
                    // Crear una etiqueta img y establecer su src al resultado de la lectura
                    var imgElement = document.createElement('img');
                    imgElement.src = e.target.result;
                    imgElement.alt = 'Vista Previa de Imagen';
                    imgElement.width = 300; // Establecer el ancho de la imagen
                    imgElement.height = 300; // Establecer la altura de la imagen

                    // Limpiar el div de vista previa y agregar la imagen
                    imagePreview.innerHTML = '';
                    imagePreview.appendChild(imgElement);
                }

                // Leer el archivo como una URL de datos
                reader.readAsDataURL(this.files[0]);
            }
        });
    });
</script>

@endsection
