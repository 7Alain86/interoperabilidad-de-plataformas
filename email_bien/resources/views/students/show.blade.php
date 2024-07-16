@extends('layouts.api')
@section('title', 'Detalles')
@section('content')


<ul class="list-group mt-4">
    @if(isset($student['id']))
    <li class="list-group-item"><strong>ID:</strong> {{ $student['id'] }}</li>
    <li class="list-group-item"><strong>Nombre:</strong> {{ $student['name'] }}</li>
    <li class="list-group-item"><strong>Apellido:</strong> {{ $student['apellido'] }}</li>
    <li class="list-group-item"><strong>Email:</strong> {{ $student['email'] }}</li>
    <a href="{{ route('students.index') }}">Volver a la lista</a>
    @else
    <p>Error: No se encontraron los datos del estudiante.</p>
    <a href="{{ route('students.index') }}" class="mb-3">Volver a la lista</a>
    @endif
</ul>


@endsection