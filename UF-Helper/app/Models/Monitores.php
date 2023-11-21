<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Monitores extends Model
{
    use HasFactory;

    protected $table = 'users';

    protected $guarded = [];

    public function disciplinas()
    {
        return $this->belongsTo(Disciplinas::class);
    }
}
