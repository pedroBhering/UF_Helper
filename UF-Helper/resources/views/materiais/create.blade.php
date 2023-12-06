@extends('layouts.adminlte')

@section('content')
    <div class="max-w-7xl mx-auto">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-3">
            <h1 class="pb-2">Adicionar Material</h1>
            <form action="{{ route('materiais.store', ['disciplina_id' => $disciplina_id]) }}" method="POST">
                @csrf

                <input type="hidden" name="disciplina_id" value="{{ $disciplina_id }}">

                <table>
                    <div class="flex flex-column">
                        <thead>
                            <tr>
                                <th></th>
                                <th></th>
                        </thead>
                        <tbody>
                            <tr>

                                <td>
                                    <label for="nome">Nome do material:</label>
                                </td>
                                <td>
                                    <input class="mb-2"  type="text" name="nome" id="nome" value="" required style="border-radius: 10px;">
                                </td>
                            </tr>



                            <tr>
                                <td>
                                    <label for="descricao">Descricao do material:</label>
                                </td>
                                <td>
                                    <input class="mb-2"  type="text" name="descricao" id="descricao" value="" required style="border-radius: 10px;">
                                </td>
                            </tr>



                            <tr>
                                <td>
                                    <label for="tipo">Tipo do material:</label>
                                </td>
                                <td>
                                    <input class="mb-2"  type="text" name="tipo" id="tipo" value="" required style="border-radius: 10px;">
                                </td>
                            </tr>



                            <tr>
                                <td>
                                    <label for="link">Link do material:</label>
                                </td>
                                <td>
                                    <input class="mb-2"  type="text" name="link" id="link" value="" required style="border-radius: 10px;">
                                </td>
                            </tr>



                            <tr>
                                <td>
                                    <label for="autor_id">Autor do material:</label>
                                </td>
                                <td>
                                    <select class="mb-2"  style="border-radius: 10px;" name="autor_id" id="autor_id">
                                        @foreach ($autores as $autor)
                                            <option value="{{ $autor->id }}"
                                                {{ $autor->id == $material->autor_id ? 'selected' : '' }}>
                                                {{ $autor->nome }}</option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                        </tbody>
                    </div>
                </table>


                <div style="display: flex; justify-content: center;">
                    <a href="{{ route('disciplinas.materiais', $disciplina_id) }}" class=" ml-2 btn btn-dark mr-2">
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
