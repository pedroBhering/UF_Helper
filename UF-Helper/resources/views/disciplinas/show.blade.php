@extends('layouts.adminlte')

@section('content')
    <!-- Display discipline information -->
    <h1>Informacoes da Disciplina</h1>
    <p><strong>Nome:</strong> {{ $disciplina->nome }}</p>
    <p><strong>Codigo:</strong> {{ $disciplina->codigo }}</p>
    <p><strong>Ementa:</strong> {{ $disciplina->ementa }}</p>
    <p><strong>Bibliografia:</strong> {{ $disciplina->bibliografia }}</p>
    <p><strong>Carga Horaria:</strong> {{ $disciplina->carga_horaria }}</p>
    <p><strong>Creditos:</strong> {{ $disciplina->creditos }}</p>
    <p><strong>Pre Requisitos:</strong> {{ $disciplina->pre_requisitos }}</p>
    {{-- <p><strong>Professores:</strong> {{ $disciplina->professores }}</p> --}}
    {{-- <p><strong>Monitor:</strong> {{ $disciplina->monitor }}</p> --}}
    {{-- <p><strong>Monitor:</strong> {{ $disciplina->depto() }}</p> --}}
@endsection