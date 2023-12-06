<?php

namespace App\Http\Controllers;

use App\Models\Deptos;
use App\Models\Disciplinas;
use App\Models\Materiais;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DisciplinaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->get('search');
        $disciplinas = Disciplinas::where('nome', 'like', "%{$search}%")->get();
        $user = Auth::user();
        return view('disciplinas.index',compact('disciplinas','user','search'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($depto_id)
    {
        $disciplina = new Disciplinas();
        return view('disciplinas.create', compact('disciplina', 'depto_id'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([]);
        $data = $request->all();
        $disciplina = Disciplinas::create($data);
        return redirect()->route('deptos.show',['depto_id' => $disciplina->depto_id])->with('success', true);
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
    public function update(Request $request, $disciplina_id)
    {
        $request->validate([]);
        $data = $request->all();
        $disciplina = Disciplinas::find($disciplina_id);
        $disciplina->update($data);
        return redirect()->route('deptos.show',['depto_id'=>$disciplina->depto_id])->with('success', true);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($disciplina_id)
    {
        $disciplina = Disciplinas::find($disciplina_id);
        $depto_id = $disciplina->depto_id;
        $disciplina->delete();
        return redirect()->route('deptos.show',['depto_id'=>$depto_id])->with('success', true);

    }

    public function materiais($disciplina_id)
    {
        $materiais = Materiais::where('disciplina_id', $disciplina_id)->get();
        $disciplina = Disciplinas::find($disciplina_id);
        $user = Auth::user();
        return view('disciplinas.materiais', compact('disciplina','materiais','user'));
    }
}
