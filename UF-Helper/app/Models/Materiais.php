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
        'autor',
    ];

    public static $rules = [
        'nome' => 'string|max:100',
        'descricao' => 'string|max:100',
        'tipo' => 'string|max:10',
        'link' => 'string|max:100',
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