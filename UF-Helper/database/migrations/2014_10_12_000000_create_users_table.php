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
        Schema::create('users', function (Blueprint $table) {
            // $table->unsignedBigInteger('depto_id');
            // $table->foreign('depto_id')->references('id')->on('deptos')->onDelete('cascade');
            //criar a chve estrangeira
            $table->id();
            $table->string('nome', 100)->nullable(false);
            $table->string('email', 100)->nullable(false)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password'); // ou $table->text('password');
            $table->string('curso', 2)->nullable(false);
            $table->string('matricula', 19)->unique(); // Limita a matrícula a 19 caracteres
            $table->string('cpf', 11)->unique(); // Limita o CPF a 11 caracteres
            $table->tinyInteger('tipo'); //aluno = 0, professor = 1, monitor = 2
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};