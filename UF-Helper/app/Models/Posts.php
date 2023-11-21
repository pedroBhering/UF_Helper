<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'conteudo',
        'disciplina',
        'votos',
        'visualizacoes',
        'comentarios',
        'usuario',
    ];

    public static $rules = [
        'titulo' => 'string|max:255',
        'conteudo' => 'string|max:255',
        'disciplina' => 'string|max:100',
        'votos' => 'string|max:5',
        'visualizacoes' => 'string|max:5',
        'comentarios' => 'string|max:5',
        'usuario' => 'string|max:100',
        // Adicione outras regras conforme necessário
    ];
}
