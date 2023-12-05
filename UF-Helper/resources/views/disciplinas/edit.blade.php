@extends('layouts.adminlte')

@section('content')
    <form action="{{ route('disciplinas.update', $disciplina) }}" method="POST">
        @method('PATCH')
        @csrf

        <div class="mt-2">
            <label for="nome">Nome da disciplina:</label>
            <input type="text" name="nome" id="nome" value="{{ $disciplina->nome }}" required>
        </div>    

        <div class="mt-2">
            <label for="codigo">Código da disciplina:</label>
            <input type="text" name="codigo" id="codigo" value="{{ $disciplina->codigo }}" required>
        </div>

        <div class="mt-2">
            <label for="ementa">Ementa da disciplina:</label>
            <input type="text" name="ementa" id="ementa" value="{{ $disciplina->ementa }}" required>
        </div>

        <div class="mt-2">
            <label for="bibliografia">Bibliografia da disciplina:</label>
            <input type="text" name="bibliografia" id="bibliografia" value="{{ $disciplina->bibliografia }}" required>
        </div>
        
        <div class="mt-2">
        <label for="carga_horaria">Carga horária da disciplina:</label>
        <input type="text" name="carga_horaria" id="carga_horaria" value="{{ $disciplina->carga_horaria }}" required>
        
        <div class="mt-2">
            <label for="creditos">Créditos da disciplina:</label>
            <input type="text" name="creditos" id="creditos" value="{{ $disciplina->creditos }}" required>
        </div> 

        <div class="mt-2">
            <label for="pre_requisitos">Pré-requisitos da disciplina:</label>
            <input type="text" name="pre_requisitos" id="pre_requisitos" value="{{ $disciplina->pre_requisitos }}" required>
        </div>

        <button class="btn btn-dark mr-2" type="submit"><i class="fas fa-save"></i> Salvar</button>
    </form>
@endsection
