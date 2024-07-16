@extends('layouts.app')

@section('title', 'Detalles del Estudiante')

@section('content')
    <div class="container mt-4">
        <h1 class="mb-4">Detalles del Estudiante</h1>
        <ul class="list-group">
            <li class="list-group-item"><strong>Apellidos:</strong> {{ $estudiante->apellidos }}</li>
            <li class="list-group-item"><strong>Nombres:</strong> {{ $estudiante->nombres }}</li>
            <li class="list-group-item"><strong>Edad:</strong> {{ $estudiante->edad }}</li>
            <li class="list-group-item"><strong>Dirección:</strong> {{ $estudiante->direccion }}</li>
            <li class="list-group-item"><strong>Email:</strong> {{ $estudiante->email }}</li>
            <li class="list-group-item"><strong>Fecha de Nacimiento:</strong> {{ $estudiante->fechanacimiento }}</li>
        </ul>
        <a href="{{ route('estudiantes.index') }}" class="btn btn-secondary mt-3">Volver al Listado</a>
    </div>
@endsection
