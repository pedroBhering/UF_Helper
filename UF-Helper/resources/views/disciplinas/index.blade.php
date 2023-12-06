@extends('layouts.adminlte')

@section('content')
    <div class="max-w-7xl mx-auto">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-3">
            <h1>Resultado da busca por <em>{{ $search }}:</em></h1>
            <ul>
                @foreach ($disciplinas as $disciplina)
                    <div class="mt-3"
                        style="border: 1px solid #000; border-radius: 10px; border: none; padding: 0.5rem; box-shadow: 0 0 10px rgba(0,0,0,0.25);">
                        <h5><a href="{{ route('disciplinas.show', $disciplina->id) }}" style="color: black">{{ $disciplina->nome }}</a></h5>
                        <div class="flex flex-wrap items-center">
                            <!-- Seus botões aqui -->
                            <a href="{{ route('materiais.index', $disciplina->id) }}"
                                class="btn btn-dark mr-2 btn-view flex-grow"><i class="fas fa-book"></i>
                                {{-- <input type="hidden" name="depto_id" value="{{ $depto->id }}"> --}}
                                <button type="submit">Ver Materiais</button>
                            </a>
                        </div>
                    </div>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
