<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'nome' => 'professor',
            'email'=> 'professor@professor.professor', 
            'password' => 123456789,
            'matricula' => 200000000,
            'curso' => 'A',
            'cpf' => 12345678901,
            'tipo' => 1,
        ]);

        User::create([
            'nome' => 'monitor',
            'email'=> 'monitor@monitor.monitor', 
            'password' => 123456789,
            'matricula' => 211111110,
            'curso' => 'X',
            'cpf' => 12345678801,
            'tipo' => 2,
        ]);

        User::create([
            'nome' => 'aluno',
            'email'=> 'aluno@aluno.aluno', 
            'password' => 123456789,
            'matricula' => 222222220,
            'curso' => 'Z',
            'cpf' => 12355678801,
            'tipo' => 0,
        ]);

        User::factory()->count(20)->create();
    }
}