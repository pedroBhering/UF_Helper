@extends('layouts.adminlte')

@section('content')
    <form action="{{ route('materiais.store', ['disciplina_id' => $disciplina_id]) }}" method="POST">
        @csrf

        <input type="hidden" name="disciplina_id" value="{{ $disciplina_id }}">

        <div class="mt-2">
            <label for="nome">Nome da material:</label>
            <input type="text" name="nome" id="nome" value="" required>
        </div>

        <div class="mt-2">
            <label for="descricao">Descricao do material:</label>
            <input type="text" name="descricao" id="descricao" value="" required>
        </div>

        <div class="mt-2">
            <label for="tipo">Tipo do material:</label>
            <input type="text" name="tipo" id="tipo" value="" required>
        </div>

        <div class="mt-2">
            <label for="link">Link do material:</label>
            <input type="text" name="link" id="link" value="" required>
        </div>

        <div class="mt-2">
            <label for="autor_id">Autor do material:</label>
            <select name="autor_id" id="autor_id">
                @foreach ($autores as $autor)
                    <option value="{{ $autor->id }}" {{ $autor->id == $material->autor_id ? 'selected' : '' }}>
                        {{ $autor->nome }}</option>
                @endforeach
            </select>
        </div>

        <button class="btn btn-dark mr-2" type="submit"><i class="fas fa-save"></i> Salvar</button>
    </form>
@endsection
