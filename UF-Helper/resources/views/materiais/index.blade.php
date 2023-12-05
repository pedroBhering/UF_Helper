@extends('layouts.adminlte')

@section('content')
    <h1>Materiais de {{ $disciplina->nome }}</h1>

    <ul>
        @foreach ($materiais as $material)
            <div>
                <h5>{{ $material->nome }}</h5>
                <div class="flex nowrap">
                <!-- Seus botões aqui -->
                <a href="{{ route('materiais.show', $material->id) }}" class="btn btn-dark mr-2 btn-view"><i class="fas fa-book"></i>
                    {{-- <input type="hidden" name="depto_id" value="{{ $depto->id }}"> --}}
                    <button type="submit">Ver Dados</button>
                </a>
                @can('update', $user)
                <a href="{{ route('materiais.edit', $material->id) }}" class="btn btn-dark btn-edit mr-2"><i
                        class="fas fa-edit"></i>
                    <button type="submit">Editar</button></a>
                    @endcan
                </div>
            </div>
        @endforeach
    </ul>
@endsection
