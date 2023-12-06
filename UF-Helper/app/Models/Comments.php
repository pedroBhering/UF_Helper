<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'conteudo',
        'autor',
        'autor_id',
        'material_id',
    ];

    public static $rules = [
        'titulo' => 'string|max:255',
        'conteudo' => 'string|max:255',
        'autor' => 'string|max:255',
        'autor_id' => 'integer',
        'material_id' => 'integer',
        // Adicione outras regras conforme necessário
    ];

    public function material()
    {
        return $this->belongsTo(Materiais::class,'id');
    }

    public function autor()
    {
        return $this->belongsTo(User::class,'id');
    }
}
