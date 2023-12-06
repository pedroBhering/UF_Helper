@extends('layouts.adminlte')

@section('content')
    <div class="max-w-7xl mx-auto">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-3">
            <h1 class="pb-2">Editar Disciplina</h1>
            <form action="{{ route('disciplinas.update', $disciplina) }}" method="POST">
                @method('PATCH')
                @csrf
                <table>
                    <thead>
                        <tr>
                            <th></th>
                            <th></th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <label for="nome">Nome da disciplina:</label>
                            </td>
                            <td>
                                <input type="text" name="nome" id="nome" value="{{ $disciplina->nome }}" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="codigo">Código da disciplina:</label>
                            </td>
                            <td>
                                <input type="text" name="codigo" id="codigo" value="{{ $disciplina->codigo }}" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="ementa">Ementa da disciplina:</label>
                            </td>
                            <td>
                                <input type="text" name="ementa" id="ementa" value="{{ $disciplina->ementa }}" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="bibliografia">Bibliografia da disciplina:</label>
                            </td>
                            <td>
                                <input type="text" name="bibliografia" id="bibliografia"
                                    value="{{ $disciplina->bibliografia }}" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="carga_horaria">Carga horária da disciplina:</label>
                            </td>
                            <td>
                                <input type="text" name="carga_horaria" id="carga_horaria"
                                    value="{{ $disciplina->carga_horaria }}" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="creditos">Créditos da disciplina:</label>
                            </td>
                            <td>
                                <input type="text" name="creditos" id="creditos" value="{{ $disciplina->creditos }}"
                                    required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="pre_requisitos">Pré-requisitos da disciplina:</label>
                            </td>
                            <td>
                                <input type="text" name="pre_requisitos" id="pre_requisitos"
                                    value="{{ $disciplina->pre_requisitos }}" required>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="flex flex-column">
                    <div style="display: flex; justify-content: center;">
                        <a href="{{ route('deptos.show', $disciplina->depto_id) }}" class=" ml-2 btn btn-dark mr-2">
                            Cancelar
                        </a>  
                        <button class="btn px-4" style="background-color: rgb(93, 0, 0); color: white;"
                            type="submit">Salvar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
