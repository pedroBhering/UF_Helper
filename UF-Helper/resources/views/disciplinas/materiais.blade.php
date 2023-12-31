@extends('layouts.adminlte')

@section('content')
    <div class="max-w-7xl mx-auto">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-3">
            <a href="{{ route('deptos.show', $disciplina->depto_id) }}" class="btn btn-dark mr-2"><i style="color:white"
                    class="fas fa-arrow-left"></i>
                <button style="color: white" type="submit">Voltar</button>
            </a>
            <h1>Materiais de {{ $disciplina->nome }}</h1>
            @can('add', $user)
                <a href="{{ route('materiais.create', $disciplina->id) }}" class="btn btn-dark mr-2 btn-add"><i
                    style="color: white" class="fas fa-plus"></i>
                    <button style="color:white" type="submit">Adicionar Material</button>
                </a>
            @endcan
            <div class="text-center">
                <ul>
                    @foreach ($materiais as $material)
                        <div class="mt-3"
                        style="border: 1px solid #000; border-radius: 10px; border: none; padding: 0.5rem; box-shadow: 0 0 10px rgba(0,0,0,0.25);">
                            <h5>{{ $material->nome }}</h5>
                            <div class="flex flex-wrap items-center justify-center">
                                <!-- Seus botões aqui -->
                                <a href="{{ route('materiais.show', $material->id) }}" class="btn btn-dark mr-2"><i
                                        class="fas fa-eye"></i>
                                    <button type="submit">Informações</button>
                                </a>
                                @can('update', $user)
                                    <a href="{{ route('materiais.edit', $material->id) }}" class="btn btn-dark btn-edit mr-2"><i
                                            class="fas fa-edit"></i>
                                        <button type="submit">Editar</button></a>
                                @endcan
                                @can('delete', $user)
                                    <form action="{{ route('materiais.destroy', $material->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <input type="hidden" name="disciplina_id" value="{{ $material->disciplina_id }}">
                                        <button type="submit" class="btn btn-danger btn-edit mr-2"><i
                                                class="fas fa-delete"></i>Deletar</button>
                                    </form>
                                @endcan
                            </div>
                        </div>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection