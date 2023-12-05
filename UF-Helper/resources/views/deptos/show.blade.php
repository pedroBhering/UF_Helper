@extends('layouts.adminlte')

@section('content')
    <h1>Disciplinas de {{ $depto->nome }}</h1>
    <a href="{{ route('disciplinas.create', $depto->id) }}" class="btn btn-dark mr-2 btn-add"><i class="fas fa-plus"></i>
        {{-- <input type="hidden" name="depto_id" value="{{ $depto->id }}"> --}}
        <button type="submit">Adicionar Disciplina</button>
    </a>
    <ul>
        @foreach ($disciplinas as $disciplina)
            <div class="mt-2">
                <h5>{{ $disciplina->nome }}</h5>
                <div class="flex nowrap">
                    <!-- Seus botões aqui -->
                    <a href="{{ route('disciplinas.materiais', $disciplina->id) }}" class="btn btn-dark mr-2 btn-view"><i
                            class="fas fa-book"></i>
                        {{-- <input type="hidden" name="depto_id" value="{{ $depto->id }}"> --}}
                        <button type="submit">Ver Materiais</button>
                    </a>
                    <a href="{{ route('disciplinas.show', $disciplina->id) }}" class="btn btn-dark mr-2"><i
                            class="fas fa-eye"></i>
                        <button type="submit">Informacoes</button>
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
@endsection
