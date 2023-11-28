<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('materiais', function (Blueprint $table) {
            $table->unsignedBigInteger('disciplina_id');
            $table->foreign('disciplina_id')->references('id')->on('disciplinas')->onDelete('cascade');

            $table->unsignedBigInteger('autor_id');
            $table->foreign('autor_id')->references('id')->on('users')->onDelete('cascade');
            //sera preenchido com os dados do usuario logado, que sera o autor do material e apenas
            //professores podem criar materiais e poderam ter acesso ao botao de criar material

            $table->id();
            $table->timestamps();
            $table->string('nome', 100);
            $table->string('descricao', 100);
            $table->string('tipo', 10);
            $table->string('link', 100);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materiais');
    }
};
