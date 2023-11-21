<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disciplinas extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'codigo',
        'ementa',
        'bibliografia',
        'carga_horaria',
        'creditos',
        'pre_requisitos',
        'professores',
        'monitor',
    ];

    public function depto()
    {
        return $this->belongsTo
        (
            Deptos::class,
            'id'
        );
    }

    public function materiais()
    {
        return $this->hasMany(Materiais::class);
    }

    public function professores()
    {
        return $this->hasMany(Professores::class);
    }

    public function monitores()
    {
        return $this->hasOne(Monitores::class);
    }
}