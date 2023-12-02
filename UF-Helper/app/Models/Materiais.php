<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materiais extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'descricao',
        'tipo',
        'link',
        'autor_id',
    ];

    public static $rules = [
        'nome' => 'string|max:100',
        'descricao' => 'string|max:500',
        'tipo' => 'string|max:10',
        'link' => 'string|max:100',
        'autor_id' => 'required|integer',
        'video' => 'string| mimes:mp4,mpeg,avi|max:2048',
        // Adicione outras regras conforme necessário
    ];

    public function rules()
    {
        return [
            'autor_id' => ['required', function ($attribute, $value, $fail) {
                $user = User::find($value);
                if ($user->tipo != 1) {
                    $fail('O autor deve ser um professor.');
                }
            }],
        ];
    }

    public function disciplina()
    {
        return $this->belongsTo(Disciplinas::class,'id');
    }

    public function autor()
    {
        return $this->belongsTo(User::class, 'autor_id');
    }
}