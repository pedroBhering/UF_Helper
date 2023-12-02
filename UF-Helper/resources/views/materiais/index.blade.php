@extends('layouts.adminlte')

@section('content')
    <h1>Materiais</h1>

    <ul>
        @foreach ($materiais as $material)
            <li>{{ $material->nome }}</li>
        @endforeach
    </ul>
@endsection