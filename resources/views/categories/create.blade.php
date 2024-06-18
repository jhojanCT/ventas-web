@extends('layout')

@section('title', 'Crear Artículo')

@section('content')
<h1>Crear Nueva Categoria</h1>

{{-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif --}}

<form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="name">Nombre</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" >
        @if($errors->has('name'))
            <div class="error">{{ $errors->first('name') }}</div>
        @endif
        <br>
    </div>
    
    <div class="form-group">
        <label for="description">Descripción</label>
        <textarea class="form-control" id="description" name="description" row="3" cols="80">{{ old('description') }}</textarea>
        @if($errors->has('description'))
        <div class="error">{{ $errors->first('description') }}</div>
    @endif
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

@endsection
