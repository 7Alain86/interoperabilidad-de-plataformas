@extends('layouts.api')
@section('title', 'Crear')
@section('content')
<h1>Agregar Estudiante</h1>
<form action="{{ route('students.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Nombre:</label>
        <input type="text" class="form-control" name="name" id="name" required>
    </div>
    <div class="mb-3">
        <label for="apellido" class="form-label">Apellido:</label>
        <input type="text" class="form-control" name="apellido" id="apellido" required>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email:</label>
        <input type="email" class="form-control" name="email" id="email" required>
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
</form>
<a href="{{ route('students.index') }}">Volver a la lista</a>
@endsection