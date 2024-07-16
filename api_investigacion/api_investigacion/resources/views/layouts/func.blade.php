@extends('layouts.app')

@section('content')
<div class="container">
    <h1>@yield('name')</h1>
    <div> </div>
    <div class="d-flex justify-content-center">
        <img class="img-fluid" src=" @yield('url')" alt="@yield('title')" style="height: 400px;">
    </div>
    <div> </div>
    <div> </div>
    <ul class="list-group">
        <li class="list-group-item">
            <h4>Datos de la Imagen</h4>
        </li>
        <li class="list-group-item">Fecha: @yield('date')</li>
        <li class="list-group-item">Descripcion: @yield('explanation')</li>
        
        

    </ul>
</div>
@endsection