@extends('layouts.adminlte')

@section('content')
    <div class="max-w-7xl mx-auto">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-3">
            <h1>Materiais de {{ $disciplina->nome }}</h1>

            <ul>
                @foreach ($materiais as $material)
                <div class="mt-3" style="border: 1px solid #000; border-radius: 10px; border: none; padding: 0.5rem; box-shadow: 0 0 10px rgba(0,0,0,0.25);">
                        <h5>{{ $material->nome }}</h5>
                        <div class="flex flex-wrap items-center">
                            <!-- Seus botões aqui -->
                            <a href="{{ route('materiais.show', $material->id) }}" class="btn btn-dark mr-2 btn-view flex-grow"><i
                                    class="fas fa-book"></i>
                                {{-- <input type="hidden" name="depto_id" value="{{ $depto->id }}"> --}}
                                <button type="submit">Ver Dados</button>
                            </a>
                            @can('update', $user)
                                <a href="{{ route('materiais.edit', $material->id) }}" class="btn btn-dark btn-edit mr-2 flex-grow"><i
                                        class="fas fa-edit"></i>
                                    <button type="submit">Editar</button></a>
                            @endcan
                        </div>
                    </div>
                @endforeach
            </ul>
        </div>
    </div>
@endsection


{{-- arrumar essa parte para encaixar com o resto --}}
