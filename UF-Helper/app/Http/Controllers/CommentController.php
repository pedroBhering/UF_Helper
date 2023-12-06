<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use App\Models\Materiais;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($material_id)
    {
        $material = Materiais::find($material_id);
        $comentario = new Comments();
        return view('comments.create', compact('comentario', 'material'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $material_id)
    {
        $request->validate([]);
        $data = $request->all();
        $material = Materiais::find($material_id);
        $data['autor_id'] = Auth::user()->id;
        $data['material_id'] = $material->id;
        $data['autor'] = Auth::user()->nome;
        Comments::create($data);
        return redirect()->route('materiais.show', ['material_id' => $material_id])->with('success', true);
    }

    /**
     * Display the specified resource.
     */
    public function show(Comments $comments)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comments $comments)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comments $comments)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($comments_id)
    {
        $comment = Comments::find($comments_id);
        $material_id = $comment->material_id;
        $comment->delete();
        
        return redirect()->route('materiais.show', ['material_id' => $material_id])->with('success', true);
        
    }
}
