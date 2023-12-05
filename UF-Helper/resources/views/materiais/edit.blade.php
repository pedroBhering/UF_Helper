@extends('layouts.adminlte')

@section('content')
    <form action="{{ route('materiais.update', $material) }}" method="POST">
        @method('PATCH')
        @csrf

        <label for="nome">Nome do material:</label>
        <input type="text" name="nome" id="nome" value="{{ $material->nome }}" required>

        <label for="codigo">Descricao do material:</label>
        <input type="text" name="descricao" id="descricao" value="{{ $material->descricao }}" required>

        <button type="submit">Salvar</button>
    </form>
@endsection
