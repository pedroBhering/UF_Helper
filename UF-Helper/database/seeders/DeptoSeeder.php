<?php

namespace Database\Seeders;

use App\Models\Deptos;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DeptoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Deptos::create([
            'nome' => 'Artes e Design',
            'email'=> 'artsDesign@adm.ufjf.br', 
            'local' => 'localizacao',
        ]);

        Deptos::create([
            'nome' => 'Ciências Exatas',
            'email'=> 'cienciasExatas@adm.ufjf.br', 
            'local' => 'localizacao',
        ]);

        Deptos::create([
            'nome' => 'Ciências Humanas',
            'email'=> 'cienciasHumanas@adm.ufjf.br', 
            'local' => 'localizacao',
        ]);

        Deptos::create([
            'nome' => 'Arquitetura e Engenharia',
            'email'=> 'arqEng@adm.ufjf.br', 
            'local' => 'localizacao',
        ]);

        Deptos::create([
            'nome' => 'Ciências Biológicas',
            'email'=> 'cienciasBiologicas@adm.ufjf.br', 
            'local' => 'localizacao',
        ]);

        Deptos::create([
            'nome' => 'Música',
            'email'=> 'musica@adm.ufjf.br', 
            'local' => 'localizacao',
        ]);
    }
}
