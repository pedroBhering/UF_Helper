@extends('layouts.adminlte')

@section('title', 'UF-Helper | Departamentos')

@section('content')
    <div class="max-w-7xl mx-auto">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-3">
            <h1 class="text-center">Lista de Departamentos</h1>
            <div class="d-flex justify-center align-center h-100vh">
                <table>
                    <thead>
                        <tr>
                            <th class="text-center"><h3>Nome</h3></th>
                            <th class="text-center"><h3>Email</h3></th>
                            <th class="text-center"><h3>Ações</h3></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($deptos as $depto)
                            <tr>
                                <td class="pr-3"><h5>{{ $depto->nome }}</h5></td>
                                <td class="pr-3"><h5>{{ $depto->email }}</h5></td>
                                <td class="pr-3">
                                    {{-- <form action="{{ route('disciplinas.index') }}" method="GET"> --}}
                                    <a href="{{ route('deptos.show', $depto->id) }}" class="btn btn-dark mr-2"><i
                                            class="fas fa-eye"></i>
                                        {{-- <input type="hidden" name="depto_id" value="{{ $depto->id }}"> --}}
                                        <button type="submit">Ver Disciplinas</button>
                                    </a>
                                    {{-- </form> --}}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    {{-- Coloque os Scripts aqui --}}
@endpush

@push('styles')
    {{-- Coloque os estilos aqui --}}
@endpush
