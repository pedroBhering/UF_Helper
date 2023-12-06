@extends('layouts.adminlte')

@section('content')
    <div class="max-w-7xl mx-auto">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-3">
            <h1>Disciplinas de {{ $depto->nome }}</h1>
            <ul>
                @foreach ($deptos as $depto)
                    @foreach ($disciplinas as $disciplina)
                        @if ($disciplina->depto_id == $depto->id)
                            <li>{{ $disciplina->nome }}</li>
                            <li>
                                <a href="{{ route('materiais.index', $disciplina->id) }}" class="btn btn-dark mr-2"><i
                                        class="fas fa-book"></i>
                                    {{-- <input type="hidden" name="depto_id" value="{{ $depto->id }}"> --}}
                                    <button type="submit">Ver Materiais</button>
                                </a>
                            </li>
                            <a href="{{ route('disciplinas.show', $disciplina->id) }}" class="btn btn-dark btn-edit"><i
                                    class="fas fa-eye"></i>
                                <button type="submit">Informacoes</button></a>
                            @can('update', $user)
                                <a href="{{ route('disciplinas.edit', $disciplina->id) }}" class="btn btn-dark btn-edit"><i
                                        class="fas fa-edit"></i>
                                    <button type="submit">Editar</button></a>
                            @endcan
                        @endif
                    @endforeach
                @endforeach
            </ul>
        </div>
    </div>
@endsection
