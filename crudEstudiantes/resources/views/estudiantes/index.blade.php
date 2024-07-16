@extends('layouts.app')

@section('title', 'Listado de Estudiantes')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Listado de Estudiantes</h1>
    <a href="{{ route('estudiantes.create') }}" class="btn btn-primary mb-3">Crear Nuevo Estudiante</a>
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    <ul class="list-group">
        @foreach($estudiantes as $estudiante)
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <div>
                {{ $estudiante->nombres }} {{ $estudiante->apellidos }}
            </div>
            <div>
                <a href="{{ route('estudiantes.show', $estudiante->codigo) }}" class="btn btn-info btn-sm">Ver</a>
                <a href="{{ route('estudiantes.edit', $estudiante->codigo) }}" class="btn btn-warning btn-sm">Editar</a>
                <form action="{{ route('estudiantes.destroy', $estudiante->codigo) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                </form>
            </div>
        </li>
        @endforeach
    </ul>
</div>
@endsection