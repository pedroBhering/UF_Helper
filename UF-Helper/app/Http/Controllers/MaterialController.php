<?php

namespace App\Http\Controllers;

use App\Models\Materiais;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Disciplinas;
use App\Models\Deptos;

class MaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($disciplina_id)
    {
        $user = Auth::user();
        $materiais = Materiais::where('disciplina_id', $disciplina_id)->get();
        $disciplina = Disciplinas::find($disciplina_id);
        return view('materiais.index', compact('materiais', 'user', 'disciplina'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($disciplina_id)
    {
        $autores = User::where('tipo', 1)->get();
        $material = new Materiais();
        return view('materiais.create', compact('material', 'autores','disciplina_id'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([]);
        $data = $request->all();
        $material = Materiais::create($data);
        return redirect()->route('disciplinas.materiais',['disciplina_id'=>$material->disciplina_id])->with('success', true);
    }

    /**
     * Display the specified resource.
     */
    public function show($material_id)
    {
        $material = Materiais::find($material_id);
        $autor = User::find($material->autor_id);
        return view('materiais.show', compact('material', 'autor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($material_id)
    {
        $material = Materiais::find($material_id);
        $disciplina = Disciplinas::find($material->disciplina_id);
        $autores = User::where('tipo', 1)->get();
        // $autores = $autores::where('depto_id', $disciplina->depto_id)->get();
        return view('materiais.edit', compact('material','autores'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $material_id)
    {
        $request->validate([]);
        $data = $request->all();
        $material = Materiais::find($material_id);
        $material->update($data);
        return redirect()->route('disciplinas.materiais',['disciplina_id'=>$material->disciplina_id])->with('success', true);
        // return redirect()->route('disciplinas.show',['disciplina_id'=>$material->disciplina_id])->with('success', true);
    }//arrumar essa rota para sair do show e ia pra a disciplina.materiais

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($material_id)
    {
        $material = Materiais::find($material_id);
        $disciplina_id = $material->disciplina_id;
        $material->delete();
        return redirect()->route('disciplinas.materiais',['disciplina_id'=>$disciplina_id])->with('success', true);
    }

    public function materiaisPorDisciplina($disciplina_id)
    {
        $materiais = Materiais::where('disciplina_id', $disciplina_id)->get();

        return view('materiais.index', compact('materiais'));
    }
}