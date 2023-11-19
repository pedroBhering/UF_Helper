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
}