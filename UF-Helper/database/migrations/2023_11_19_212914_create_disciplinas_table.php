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
        Schema::create('disciplinas', function (Blueprint $table) {
            $table->unsignedBigInteger('depto_id');
            $table->foreign('depto_id')->references('id')->on('deptos')->onDelete('cascade');
            //relacionamento com a tabela de departamentos
            //$table->foreignId('depto_id')->constrained('deptos');
            //adaptar para os outros relacionamentos
            $table->id();
            $table->timestamps();
            $table->string('nome');
            $table->string('codigo',6)->unique();
            $table->string('ementa');
            $table->string('bibliografia');
            $table->string('carga_horaria');
            $table->tinyInteger('creditos');
            $table->string('pre_requisitos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('disciplinas');
    }
};
