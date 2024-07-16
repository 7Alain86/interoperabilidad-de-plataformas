@extends('layouts.app')
@section('title', 'Enviar')
@section('content')


<div class="container">

<div class="container">
    @if(isset($error))
        <div class="alert alert-warning">
            {{ $error }}
        </div>
    @endif

        <form action="{{ route('fecha') }}" method="get">
            @csrf
            <div class="mb-3">
                <label for="fecha" class="form-label">Solo fechas desde el 16 de Junio de 1995 hasta hoy: </label>
                <input type="date" class="form-control" name="fecha" id="fecha" required>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>

</div>
    @endsection