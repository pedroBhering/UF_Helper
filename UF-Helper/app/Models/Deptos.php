<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deptos extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'disciplinas',
    ];

    public static $rules = [
        'nome' => 'string|max:100',
        'disciplinas' => 'string|max:100',
        // Adicione outras regras conforme necessário
    ];

    public function diciplinas()
    {
        return $this->hasMany(Diciplinas::class);
    }

    public function professores()
    {
        return $this->hasMany(Professores::class);
    }
}