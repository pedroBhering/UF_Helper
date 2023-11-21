<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prof extends Model
{
    use HasFactory;

    protected $table = 'users';

    protected $guarded = [];

    public function disciplinas()
    {
        return $this->hasMany(Disciplinas::class);
    }

    public function depto()
    {
        return $this->belongsTo(Deptos::class);
    }
}
