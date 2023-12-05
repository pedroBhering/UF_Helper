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
            'nome' => 'root',
            'email'=> 'root@root.root', 
            'password' => 123456789,
            'matricula' => 200000000,
            'curso' => 'A',
            'cpf' => 12345678901,
            'tipo' => 1,
        ]);

        User::factory()->count(20)->create();
    }
}