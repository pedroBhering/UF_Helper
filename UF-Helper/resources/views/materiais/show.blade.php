@extends('layouts.adminlte')

@section('content')
    <div class="max-w-7xl mx-auto">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-3">
            <a href="{{ route('disciplinas.materiais', $material->disciplina_id) }}" class="btn btn-dark mr-2"><i
                    style="color:white" class="fas fa-arrow-left"></i>
                <button style="color: white" type="submit">Voltar</button>
            </a>

            <h1>Informacoes de Material</h1>

            <p><strong>Nome:</strong> {{ $material->nome }}</p>
            <p><strong>Tipo:</strong> {{ $material->tipo }}</p>
            <p><strong>Descricao:</strong> {{ $material->descricao }}</p>
            <p><strong><a style="color: rgb(193, 0, 0)" href="{{ $material->link }}">Link do material</a></strong></p>
            <p><strong>Autoria:</strong> {{ $autor->nome }}</p>

            <hr style="border: 2px solid black;">

            <h2>Comentarios</h2>

            <div class="mb-3">
                <a href="{{ route('comments.create', $material->id) }}" class="btn btn-dark mr-2 btn-add"><i
                        class="fas fa-plus" style="color:white"></i>
                    {{-- <input type="hidden" name="depto_id" value="{{ $depto->id }}"> --}}
                    <button style="color: white" type="submit">Adicionar Comentario</button>
                </a>
            </div>

            @foreach ($comentarios as $comentario)
                <div class="bg-white overflow-hidden shadow-lg sm:rounded-lg p-3 m-2">
                    <p><strong>Titulo:</strong> {{ $comentario->titulo }}</p>
                    <p><strong>Comentario:</strong> {{ $comentario->conteudo }}</p>
                    <p>Autor: {{ $comentario->autor }}</p>
                    @can('deleteComment', $user)
                        <form action="{{ route('comments.destroy', $comentario->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-edit mr-2"><i
                                    class="fas fa-delete"></i>Deletar</button>
                        </form>
                    @endcan
                </div>
            @endforeach
        </div>
    </div>
@endsection
