@extends('layouts.adminlte')

@section('content')
    <div class="max-w-7xl mx-auto">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-3">
            <h1>Informacoes de Material</h1>

            <p><strong>Nome:</strong> {{ $material->nome }}</p>
            <p><strong>Descricao:</strong> {{ $material->descricao }}</p>
            <p><strong>Link:</strong> {{ $material->link }}</p>
            <p><strong>Autoria:</strong> {{ $autor->nome }}</p>
            {{-- <p><strong>Disciplina:</strong> {{ $material->disciplina_id }}</p> --}}
        </div>
    </div>
@endsection
