<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nome',
        'email',
        'password',
        'matricula',
        'curso',
        'cpf',
        'tipo', //aluno = 0, professor = 1, monitor = 2
    ];

    const ALUNO = 0;
    const PROFESSOR = 1;
    const MONITOR = 2;

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    
    public static $rules = [
        'matricula' => 'numeric|digits:19',
        'cpf' => 'numeric|digits:11',
        'nome' => 'string|max:100',
        'email' => 'string|max:100',
        'curso' => 'string|uppercase',
        // Adicione outras regras conforme necessário
    ];

    public function comments()
    {
        return $this->hasMany(Comments::class);
    }
}