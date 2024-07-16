@extends('layouts.app')

@section('title', 'Editar Estudiante')

@section('content')
    <div class="container mt-4">
        <h1 class="mb-4">Editar Estudiante</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('estudiantes.update', $estudiante->codigo) }}" method="POST">
            @csrf
            @method('PUT')
            <input type="hidden" name="codigo" id="codigo" value="{{ $estudiante->codigo }}">
            <div class="form-group">
                <label for="apellidos">Apellidos:</label>
                <input type="text" class="form-control" name="apellidos" id="apellidos" value="{{ old('apellidos', $estudiante->apellidos) }}" required>
            </div>
            <div class="form-group">
                <label for="nombres">Nombres:</label>
                <input type="text" class="form-control" name="nombres" id="nombres" value="{{ old('nombres', $estudiante->nombres) }}" required>
            </div>
            <div class="form-group">
                <label for="edad">Edad:</label>
                <input type="number" class="form-control" name="edad" id="edad" value="{{ old('edad', $estudiante->edad) }}" required>
            </div>
            <div class="form-group">
                <label for="direccion">Dirección:</label>
                <input type="text" class="form-control" name="direccion" id="direccion" value="{{ old('direccion', $estudiante->direccion) }}" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" name="email" id="email" value="{{ old('email', $estudiante->email) }}" required>
            </div>
            <div class="form-group">
                <label for="fechanacimiento">Fecha de Nacimiento:</label>
                <input type="date" class="form-control" name="fechanacimiento" id="fechanacimiento" value="{{ old('fechanacimiento', $estudiante->fechanacimiento) }}" required>
            </div>
            <div style="height:1rem"></div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
@endsection
