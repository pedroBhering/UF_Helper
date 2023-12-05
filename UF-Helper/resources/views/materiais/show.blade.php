@extends('layouts.adminlte')

@section('content')
    <!-- Display material information -->
    <h1>Informacoes de Material</h1>
    <p><strong>Nome:</strong> {{ $material->nome }}</p>
    <p><strong>Tipo:</strong> {{ $material->tipo }}</p>
    <p><strong>Descricao:</strong> {{ $material->descricao }}</p>
    <p><strong><a href="{{ $material->link }}">Link do material</a></strong></p>
    <p><strong>Autoria:</strong> {{ $autor->nome }}</p>
    {{-- <p><strong>Disciplina:</strong> {{ $material->disciplina_id }}</p> --}}
@endsection
