@extends('layouts.api')
@section('content')



<div class="container mt-4">
    <h1 class="mt-4">Listado de Estudiantes</h1>
    <a href="{{ route('crear') }}" class="btn btn-primary t-3">Crear nuevo estudiante</a>
    <h1> </h1>
    @foreach($data as $alumno)
    <ul class="list-group">
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <div>
                {{ isset($alumno['name']) ? htmlspecialchars($alumno['name'], ENT_QUOTES, 'UTF-8') : 'Nombre no disponible' }}
                {{ isset($alumno['apellido']) ? htmlspecialchars($alumno['apellido'], ENT_QUOTES, 'UTF-8') : 'Apellido no disponible' }}
            </div>
            <div>
                <a href="#" class="btn btn-info btn-sm">Ver</a>
                <a href="#" class="btn btn-warning btn-sm">Editar</a>
                @csrf
                @method('DELETE')
                <a href="#" class="btn btn-danger btn-sm">Eliminar</a>
            </div>
        </li>
        <!--name y apellido-->
    </ul>
    @endforeach
</div>

@endsection