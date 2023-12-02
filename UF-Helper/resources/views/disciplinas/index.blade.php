@extends('layouts.adminlte')

@section('content')
    <h1>Disciplinas</h1>

    <ul>
        @foreach ($disciplinas as $disciplina)
            <li>{{ $disciplina->nome }}</li>
            <li>
                <a href="{{ route('materiais.index', $disciplina->id) }}" class="btn btn-dark mr-2"><i class="fas fa-eye"></i>
                    {{-- <input type="hidden" name="depto_id" value="{{ $depto->id }}"> --}}
                    <button type="submit">Ver Materiais</button>
                </a>
            </li>
        @endforeach
    </ul>
@endsection