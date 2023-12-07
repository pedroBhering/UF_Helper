@extends('layouts.adminlte')

@section('content')
    <div class="max-w-7xl mx-auto">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-3">
            <a href="{{ route('deptos.show', $disciplina->depto_id) }}" class=" ml-2 btn btn-dark mr-2"><i style="color:white"
                    class="fas fa-arrow-left"></i>
                <button style="color: white" type="submit">Voltar</button>
            </a>
            <h1>Informacoes da Disciplina</h1>
            <div class="flex justify-center">
                <table>
                    <thead>
                        <tr>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="pr-3"><strong>Nome:</strong></td>
                            <td>{{ $disciplina->nome }}</td>
                        </tr>
                        <tr>
                            <td class="pr-3"><strong>Código:</strong></td>
                            <td>{{ $disciplina->codigo }}</td>
                        </tr>
                        <tr>
                            <td><strong>Ementa:</strong></td>
                            <td>{{ $disciplina->ementa }}</td>
                        </tr>
                        <tr>
                            <td><strong>Bibliografia:</strong></td>
                            <td>{{ $disciplina->bibliografia }}</td>
                        </tr>
                        <tr>
                            <td class="pr-3"><strong>Carga Horária:</strong></td>
                            <td>{{ $disciplina->carga_horaria }}</td>
                        </tr>
                        <tr>
                            <td><strong>Créditos:</strong></td>
                            <td>{{ $disciplina->creditos }}</td>
                        </tr>
                        <tr>
                            <td><strong>Requisitos:</strong></td>
                            <td>{{ $disciplina->pre_requisitos }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
