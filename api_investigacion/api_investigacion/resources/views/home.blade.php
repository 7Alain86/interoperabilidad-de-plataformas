@extends('layouts.app')
@section('content')

<div class="container">
        <div class="position-relative">
            <img src="{{ asset('banner.png') }}" class="img-fluid w-100 h-100" alt="Banner">
            <div class="position-absolute top-50 start-50 translate-middle text-center text-white">
                <h1>API del Espacio</h1>
                <p>Fotos del Universo en la palma de tu mano</p>
            </div>
        </div>
        <br>
        <div class="container">
            <h2>¿En qué consiste?</h2>
            <p>Este proyecto recibe una fecha por parte del usuario y en respuesta devuelve la imagen que publicó la NASA ese día</p>
            <h2>¿Cómo funciona?</h2>
            <p>Existen distintas opciones de entrada para el proyecto.</p>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Puedes buscar la imagen del día, que mostrará lo que la NASA tiene para enseñar hoy.</li>
                <li class="list-group-item">Puedes buscar por fecha específica para encontrar lo que la NASA enseñó en determinado día.</li>
                <li class="list-group-item">O si te gana la flojera, puedes buscar una foto al azar.</li>
            </ul>
        </div>
    </div>

@endsection()