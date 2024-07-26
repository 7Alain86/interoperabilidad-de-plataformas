@extends('layouts.api')
@section('title', 'Editar')
@section('content')
<h1>Editar Estudiante</h1>
<form action="{{ route('students.update', $student['id']) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="name" class="form-label">Nombre:</label>
        <input type="text" class="form-control" name="name" id="name" value="{{ $student['name'] }}" required>
    </div>
    <div class="mb-3">
        <label for="apellido" class="form-label">Apellido:</label>
        <input type="text" class="form-control" name="apellido" id="apellido" value="{{ $student['apellido'] }}"  required>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email:</label>
        <input type="email" class="form-control" name="email" id="email" value="{{ $student['email'] }}" required>
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
</form>
<div> </div>
<a href="{{ route('students.index') }}">Volver a la lista</a>
@endsection
