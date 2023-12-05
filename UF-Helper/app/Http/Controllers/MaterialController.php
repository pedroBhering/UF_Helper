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
    public function create()
    {
        $material = new Materiais();
        return view('materiais.create', compact('material'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $material = new Materiais();
        $material->fill($request->all());

        // Valida se o autor é um professor
        $material->validate();

        if ($material->errors()->has('autor_id')) {
            return response()->json($material->errors(), 422);
        }

        if ($request->hasFile('pdf')) {
            $pdf = $request->file('pdf');
            $fileName = $pdf->getClientOriginalName();
            $path = $pdf->storeAs('public/materiais', $fileName);
    
            $material->link = asset($path);
        }

        if ($request->hasFile('video')) {
            $video = $request->file('video');
            $fileName = $video->getClientOriginalName();
            $path = $video->storeAs('public/videos', $fileName);
        
            $material->link = asset($path);
        }

        $material->save();

        return redirect()->route('materiais.index')->with('success', true);
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
        return redirect()->route('materiais.index',['disciplina_id'=>$material->disciplina_id])->with('success', true);
        // return redirect()->route('disciplinas.show',['disciplina_id'=>$material->disciplina_id])->with('success', true);
    }//arrumar essa rota para sair do show e ia pra a disciplina.materiais

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Materiais $materiais)
    {
        $materiais->delete();
        return redirect()->route('materiais.index')->with('success', true);
    }

    public function materiaisPorDisciplina($disciplina_id)
    {
        $materiais = Materiais::where('disciplina_id', $disciplina_id)->get();

        return view('materiais.index', compact('materiais'));
    }
}