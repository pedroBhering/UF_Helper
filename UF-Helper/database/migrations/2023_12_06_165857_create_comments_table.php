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
        Schema::create('comments', function (Blueprint $table) {
            $table->unsignedBigInteger('material_id');
            $table->foreign('material_id')->references('id')->on('materiais')->onDelete('cascade');

            $table->unsignedBigInteger('autor_id');
            $table->foreign('autor_id')->references('id')->on('users')->onDelete('cascade');

            $table->id();
            $table->timestamps();
            $table->string('titulo', 255);
            $table->string('conteudo', 255);
            $table->string('autor', 255);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
