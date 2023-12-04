@extends('layouts.adminlte')

@section('content')
    <form action="{{ route('disciplinas.update', $disciplina) }}" method="PATCH">
        @csrf

        <label for="nome">Nome da disciplina:</label>
        <input type="text" name="nome" id="nome" value="{{ $disciplina->nome }}" required>

        <label for="codigo">Código da disciplina:</label>
        <input type="text" name="codigo" id="codigo" value="{{ $disciplina->codigo }}" required>

        <button type="submit">Salvar</button>
    </form>
@endsection
