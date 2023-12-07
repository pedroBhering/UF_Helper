@extends('layouts.adminlte')

@section('content')
    <div class="max-w-7xl mx-auto">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-3">
            <a href="{{ route('deptos.index') }}" class="btn btn-dark mr-2"><i style="color:white"
                    class="fas fa-arrow-left"></i>
                <button style="color: white" type="submit">Voltar</button>
            </a>
            <h1>Disciplinas de {{ $depto->nome }}</h1>
            @can('add',$user)
                <a href="{{ route('disciplinas.create', $depto->id) }}" class="btn btn-dark mr-2 btn-add"><i
                    style="color: white" class="fas fa-plus"></i>
                    {{-- <input type="hidden" name="depto_id" value="{{ $depto->id }}"> --}}
                    <button style="color: white" type="submit">Adicionar Disciplina</button>
                </a>
            @endcan    
            <div class="text-center">
                <ul>
                    @foreach ($disciplinas as $disciplina)
                        <div class="mt-3"
                            style="border: 1px solid #000; border-radius: 10px; border: none; padding: 0.5rem; box-shadow: 0 0 10px rgba(0,0,0,0.25);">
                            <h5>{{$disciplina->codigo}}-{{ $disciplina->nome }}</h5>
                            <div class="flex flex-wrap items-center justify-center">
                                <!-- Seus botões aqui -->
                                <a href="{{ route('materiais.index', $disciplina->id) }}"
                                    class="btn btn-dark mr-2 btn-view"><i class="fas fa-book"></i>
                                    <button type="submit">Ver Materiais</button>
                                </a>
                                <a href="{{ route('disciplinas.show', $disciplina->id) }}"
                                    class="btn btn-dark mr-2"><i class="fas fa-eye"></i>
                                    <button type="submit">Informações</button>
                                </a>
                                @can('update', $user)
                                    <a href="{{ route('disciplinas.edit', $disciplina->id) }}" class="btn btn-dark btn-edit mr-2"><i
                                            class="fas fa-edit"></i>
                                        <button type="submit">Editar</button></a>
                                @endcan
                                @can('delete', $user)
                                    <form action="{{ route('disciplinas.destroy', $disciplina->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <input type="hidden" name="depto_id" value="{{ $depto->id }}">
                                        <button type="submit" class="btn btn-danger btn-edit mr-2"><i
                                                class="fas fa-delete"></i>Deletar</button>
                                    </form>
                                @endcan
                            </div>
                        </div>
                    @endforeach
                </ul>
            </div>

            <div class="calendario bg-white overflow-hidden sm:rounded-lg p-3"
                style="flex-direction:column;display:flex; justify-content:center">
                <h1 class="text-center">Calendario</h1>
                <div class="calendario-img">
                    <img class="mb-3 shadow-lg w-1/2 mx-auto" src="{{ asset('img/calendario.jpg') }}" alt="Calendario">
                </div>
            </div>
        </div>
    </div>
@endsection
