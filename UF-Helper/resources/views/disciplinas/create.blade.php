@extends('layouts.adminlte')

@section('content')
    <div class="max-w-7xl mx-auto">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-3">
            <h1 class="pb-2">Adicionar Disciplina</h1>
            <form action="{{ route('disciplinas.store', ['depto_id' => $depto_id]) }}" method="POST">
                @csrf

                <input type="hidden" name="depto_id" value="{{ $depto_id }}">
                <div class="flex flex-column">
                    <div class="pb-3">
                        <label for="nome">Nome da disciplina:</label>
                        <input type="text" name="nome" id="nome" value="" required>
                    </div>

                    <div class="pb-3">
                        <label for="codigo">Código da disciplina:</label>
                        <input type="text" name="codigo" id="codigo" value="" required>
                    </div>

                    <div class="pb-3">
                        <label for="ementa">Ementa da disciplina:</label>
                        <input type="text" name="ementa" id="ementa" value="" required>
                    </div>

                    <div class="pb-3">
                        <label for="bibliografia">Bibliografia da disciplina:</label>
                        <input type="text" name="bibliografia" id="bibliografia" value="" required>
                    </div>

                    <div class="pb-3">
                        <label for="carga_horaria">Carga horária da disciplina:</label>
                        <input type="text" name="carga_horaria" id="carga_horaria" value="" required>
                    </div>

                    <div class="pb-3">
                        <label for="creditos">Créditos da disciplina:</label>
                        <input type="text" name="creditos" id="creditos" value="" required>
                    </div>

                    <div class="pb-3">
                        <label for="pre_requisitos">Pré-requisitos da disciplina:</label>
                        <input type="text" name="pre_requisitos" id="pre_requisitos" value="" required>
                    </div>

                    <div style="display: flex; justify-content: center;">
                        <a href="{{ route('deptos.show', $depto_id) }}" class=" ml-2 btn btn-dark mr-2">
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
