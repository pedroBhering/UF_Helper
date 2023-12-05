@extends('layouts.adminlte')

@section('content')
    <h1>Editar Material</h1>

    <form action="{{ route('materiais.update', $material) }}" method="POST">
        @method('PATCH')
        @csrf

        <div class="mt-2">
            <label for="nome">Nome do material:</label>
            <input type="text" name="nome" id="nome" value="{{ $material->nome }}" required>
        </div>
        
        <div class="mt-2">
            <label for="descricao">Descricao do material:</label>
            <input type="text" name="descricao" id="descricao" value="{{ $material->descricao }}" required>
        </div>

        <div class="mt-2">
            <label for="tipo">Tipo do material:</label>
            <input type="text" name="tipo" id="tipo" value="{{ $material->tipo }}" required>
        </div>

        <div class="mt-2">
            <label for="link">Link do material:</label>
            <input type="text" name="link" id="link" value="{{ $material->link }}" required>
        </div>

        <div class="mt-2">
        <label for="autor_id">Autor do material:</label>
            <select name="autor_id" id="autor_id">
                @foreach ($autores as $autor)
                    <option value="{{ $autor->id }}" {{ $autor->id == $material->autor_id ? 'selected' : '' }}>{{ $autor->nome }}</option>
                @endforeach
            </select>
        </div>
        <button class="btn btn-dark mr-2" type="submit"><i class="fas fa-save"></i> Salvar</button>
    </form>
@endsection