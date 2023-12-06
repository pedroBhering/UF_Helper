@extends('layouts.adminlte')

@section('content')
    <div class="max-w-7xl mx-auto">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-3">
            <h1 class="pb-2">Editar Material</h1>
            <form action="{{ route('materiais.update', $material) }}" method="POST">
                @method('PATCH')
                @csrf
                <div class="flex flex-column">
                    <div class="mt-2">
                        <label for="nome">Nome do material:</label>
                        <input type="text" name="nome" id="nome" value="{{ $material->nome }}" required>
                    </div>
                    <div class="mt-2">
                        <label for="descricao">Descricao do material:</label>
                        <input type="text" name="descricao" id="descricao" value="{{ $material->descricao }}" required>
                    </div>
                    <div class="mt-2">
                        <label for="link">Link do material:</label>
                        <input type="text" name="link" id="link" value="{{ $material->link }}" required>
                    </div>

                    <div class="mt-2">
                        <label for="autor_id">Autor do material:</label>
                        <select name="autor_id" id="autor_id">
                            @foreach ($autores as $autor)
                                <option value="{{ $autor->id }}"
                                    {{ $autor->id == $material->autor_id ? 'selected' : '' }}>
                                    {{ $autor->nome }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div style="display: flex; justify-content: center;">
                        <button class="btn px-4" style="background-color: rgb(93, 0, 0); color: white;"
                            type="submit">Salvar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
