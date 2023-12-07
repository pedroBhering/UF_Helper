@extends('layouts.adminlte')

@section('content')
    <div class="max-w-7xl mx-auto">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-3">
            <h1 class="pb-2">Editar Disciplina</h1>
            <form action="{{ route('disciplinas.update', $disciplina) }}" method="POST">
                @method('PATCH')
                @csrf
                <div class="flex justify-center">
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
                                    <input class="mb-2" type="text" name="nome" id="nome"
                                        value="{{ $disciplina->nome }}" required style="border-radius: 10px;">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="codigo">Código da disciplina:</label>
                                </td>
                                <td>
                                    <input class="mb-2" type="text" name="codigo" id="codigo"
                                        value="{{ $disciplina->codigo }}" required style="border-radius: 10px;">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="ementa">Ementa da disciplina:</label>
                                </td>
                                <td>
                                    <input class="mb-2" type="text" name="ementa" id="ementa"
                                        value="{{ $disciplina->ementa }}" required style="border-radius: 10px;">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="bibliografia">Bibliografia da disciplina:</label>
                                </td>
                                <td>
                                    <input class="mb-2" type="text" name="bibliografia" id="bibliografia"
                                        value="{{ $disciplina->bibliografia }}" required style="border-radius: 10px;">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="carga_horaria">Carga horária da disciplina:</label>
                                </td>
                                <td>
                                    <input class="mb-2" type="text" name="carga_horaria" id="carga_horaria"
                                        value="{{ $disciplina->carga_horaria }}" required style="border-radius: 10px;">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="creditos">Créditos da disciplina:</label>
                                </td>
                                <td>
                                    <input class="mb-2" type="text" name="creditos" id="creditos"
                                        value="{{ $disciplina->creditos }}" required style="border-radius: 10px;">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="pre_requisitos">Pré-requisitos da disciplina:</label>
                                </td>
                                <td>
                                    <input class="mb-2" type="text" name="pre_requisitos" id="pre_requisitos"
                                        value="{{ $disciplina->pre_requisitos }}" required style="border-radius: 10px;">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
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
