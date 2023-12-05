@extends('layouts.adminlte')

@section('content')
    <!-- Display material information -->
    <h1>Informacoes de Material</h1>
    <p><strong>Nome:</strong> {{ $material->nome }}</p>
    <p><strong>Descricao:</strong> {{ $material->descricao }}</p>
    <p><strong>Link:</strong> {{ $material->link }}</p>
    <p><strong>Autoria:</strong> {{ $autor->nome }}</p>
    {{-- <p><strong>Disciplina:</strong> {{ $material->disciplina_id }}</p> --}}
@endsection
