@extends('layouts.adminlte')

@section('content')
    <div class="max-w-7xl mx-auto">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-3">
            <h1 class="pb-2">Editar Disciplina</h1>
            <form action="{{ route('disciplinas.update', $disciplina) }}" method="POST">
                @method('PATCH')
                @csrf
                <div class="flex flex-column">
                    <div class="pb-3">
                        <label for="nome">Nome da disciplina:</label>
                        <input type="text" name="nome" id="nome" value="{{ $disciplina->nome }}" required>
                    </div>
                    <div class="pb-3">
                        <label for="codigo">Código da disciplina:</label>
                        <input type="text" name="codigo" id="codigo" value="{{ $disciplina->codigo }}" required>
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
