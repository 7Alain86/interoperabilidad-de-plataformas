@extends('layouts.api')
@section('title', 'Index')
@section('content')
<h1 class="mb-4">Lista de Estudiantes</h1>
<a href="{{ route('students.create') }}" class="btn btn-primary mb-3">Agregar Estudiante</a>
<ul class="list-group">
    @foreach($students as $student)
    <li class="list-group-item d-flex justify-content-between align-items-center">
        <div>
            {{ $student['name'] }} {{ $student['apellido'] }}
        </div>
        <div>
            <a href="{{ route('students.show', $student['id']) }}" class="btn btn-primary btn-sm">Ver</a>
            <a href="{{ route('students.edit', $student['id']) }}" class="btn btn-warning btn-sm">Editar</a>
            <form action="{{ route('students.destroy', $student['id']) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
            </form>
        </div>
    </li>
    @endforeach
</ul>
@endsection