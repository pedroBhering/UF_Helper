@extends('layouts.adminlte')

@section('content')
    <h1>Lista de Departamentos</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($deptos as $depto)
                <tr>
                    <td>{{ $depto->id }}</td>
                    <td>{{ $depto->nome }}</td>
                    <td>{{ $depto->email }}</td>
                    <td>
                        {{-- <form action="{{ route('disciplinas.index') }}" method="GET"> --}}
                            <a href="{{ route('disciplinas.index', $depto->id) }}" class="btn btn-dark mr-2"><i class="fas fa-eye"></i>
                                {{-- <input type="hidden" name="depto_id" value="{{ $depto->id }}"> --}}
                                <button type="submit">Ver Disciplinas</button>
                            </a>
                            {{-- </form> --}}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
