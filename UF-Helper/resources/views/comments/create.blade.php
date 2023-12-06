@extends('layouts.adminlte')

@section('content')
    <div class="max-w-7xl mx-auto">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-3">
            <h1 class="pb-2">Adicionar Comentário</h1>
            <form action="{{ route('comments.store',$material->id) }}" method="POST">
                @csrf
                <div class="flex flex-column">
                    <div class="pb-3">
                        <label for="titulo">Titulo do comentario:</label>
                        <input type="text" name="titulo" id="titulo" value="" required>
                    </div>

                    <div class="pb-3">
                        <label for="conteudo">Conteudo do comentario:</label>
                        <input type="text" name="conteudo" id="conteudo" value="" required>
                    </div>

                    <div style="display: flex; justify-content: center;">
                        <a href="{{ route('materiais.show', $material->id) }}" class=" ml-2 btn btn-dark mr-2">
                            Cancelar
                        </a> 
                        <button class="btn px-4" style="background-color: rgb(93, 0, 0); color: white;"
                            type="submit">Salvar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
