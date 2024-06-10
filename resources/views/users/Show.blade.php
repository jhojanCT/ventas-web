@extends('layout')

@section('title', 'Detalles de Usuario')

@section('content')
    <h1>Detalles de Usuario</h1>
    <p>ID: {{ $user->id }}</p>
    <p>Nombre: {{ $user->name }}</p>
    <p>Email: {{ $user->email }}</p>
    <p>Rol: {{ $user->role->name }}</p>
  
@endsection
