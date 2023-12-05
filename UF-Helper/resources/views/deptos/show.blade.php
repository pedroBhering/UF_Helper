@extends('layouts.adminlte')

@section('content')
    <h1>Disciplinas de {{ $depto->nome }}</h1>

    <ul>
        @foreach ($disciplinas as $disciplina)
            <div class="mt-2">
                <h5>{{ $disciplina->nome }}</h5>
                <div class="flex nowrap">
                <!-- Seus botões aqui -->
                <a href="{{ route('materiais.index', $disciplina->id) }}" class="btn btn-dark mr-2 btn-view"><i class="fas fa-book"></i>
                    {{-- <input type="hidden" name="depto_id" value="{{ $depto->id }}"> --}}
                    <button type="submit">Ver Materiais</button>
                </a>
                <a href="{{ route('disciplinas.show', $disciplina->id) }}" class="btn btn-dark mr-2"><i class="fas fa-eye"></i>
                    <button type="submit">Informacoes</button>
                </a>
                @can('update', $user)
                <a href="{{ route('disciplinas.edit', $disciplina->id) }}" class="btn btn-dark btn-edit mr-2"><i
                        class="fas fa-edit"></i>
                    <button type="submit">Editar</button></a>
                    @endcan
                </div>
            </div>
        @endforeach
    </ul>
@endsection
