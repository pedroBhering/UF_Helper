<?php

namespace App\Http\Controllers;

use App\Models\Materiais;
use Illuminate\Http\Request;

class MaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $materiais = [];
        return view('materiais.index',compact('materiais'));
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

        $material->save();

        return redirect()->route('materiais.index')->with('success', true);
    }

    /**
     * Display the specified resource.
     */
    public function show(Materiais $materiai)
    {
        return view('materiais.show', compact('materiai'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Materiais $materiais)
    {
        return view('materiais.edit', compact('materiais'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Materiais $materiais)
    {
        $data = $request->validated();
        $materiais->update($data);
        return redirect()->route('materiais.index')->with('success', true);
    }

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
