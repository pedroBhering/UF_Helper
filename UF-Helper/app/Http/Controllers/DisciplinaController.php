<?php

namespace App\Http\Controllers;

use App\Models\Deptos;
use App\Models\Disciplinas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DisciplinaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($depto_id)
    {
        $user = Auth::user();
        $disciplinas = Disciplinas::where('depto_id', $depto_id)->get();
        $depto = Deptos::find($depto_id);
        return view('disciplinas.index', compact('disciplinas', 'user', 'depto'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $disciplina = new Disciplinas();
        return view('disciplinas.create', compact('disciplina'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validated();
        Disciplinas::create($data);
        return redirect()->route('disciplinas.index')->with('success', true);
    }

    /**
     * Display the specified resource.
     */
    public function show($disciplina_id)
    {
        $disciplina = Disciplinas::find($disciplina_id);
        return view('disciplinas.show', compact('disciplina'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($disciplina_id)
    {
        $disciplina = Disciplinas::find($disciplina_id);
        return view('disciplinas.edit', compact('disciplina'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $departamento_id)
    {
        $request->validated();
        $data = $request->all();
        $disciplina = Disciplinas::find($departamento_id);
        $disciplina->update($data);
        return redirect()->route('disciplinas.index')->with('success', true);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Disciplinas $disciplina)
    {
        $disciplina->delete();
        return redirect()->route('disciplinas.index')->with('success', true);
    }
}
