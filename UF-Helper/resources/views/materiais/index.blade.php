@extends('layouts.adminlte')

@section('content')
    <h1>Materiais de {{ $disciplina->nome }}</h1>

    <ul>
        @foreach ($materiais as $material)
            <li>{{ $material->nome }}</li>
            <a href="{{ route('materiais.show', $material->id) }}" class="btn btn-dark btn-edit"><i class="fas fa-eye"></i>
                <button type="submit">Informacoes</button></a>
            @can('update', $user)
                <a href="{{ route('materiais.edit', $material->id) }}" class="btn btn-dark btn-edit"><i class="fas fa-edit"></i>
                    <button type="submit">Editar</button></a>
            @endcan
        @endforeach
    </ul>
@endsection
