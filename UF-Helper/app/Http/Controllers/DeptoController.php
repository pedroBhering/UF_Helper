<?php

namespace App\Http\Controllers;

use App\Models\Deptos;
use Illuminate\Http\Request;

class DeptoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $deptos = Deptos::all();
        return view('deptos.index', compact('deptos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $depto = new Deptos();
        return view('deptos.create', compact('depto'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validated();
        Deptos::create($data);
        return redirect()->route('deptos.index')->with('success', true);
    }

    /**
     * Display the specified resource.
     */
    public function show(Deptos $depto)
    {
        return view('deptos.show', compact('depto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Deptos $depto)
    {
        return view('deptos.edit', compact('depto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Deptos $depto)
    {
        $data = $request->validated();

        $depto->update($data);

        return redirect()->route('equipaments.index')->with('success', true);   
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Deptos $depto)
    {
        $depto->delete();
        return redirect()->route('deptos.index')->with('success', true);
    }
}
