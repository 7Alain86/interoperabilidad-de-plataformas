@extends('layouts.func')

@section('title', 'Foto Aleatoria')

@section('name', 'Imagen Aleatoria')

@section('url')
{{ $data['url'] }}
@endsection

@section('title')
{{ $data['title'] }}
@endsection


@section('date')
{{ $data['date'] }}
@endsection

@section('explanation')
{{ $data['explanation'] }}
@endsection
