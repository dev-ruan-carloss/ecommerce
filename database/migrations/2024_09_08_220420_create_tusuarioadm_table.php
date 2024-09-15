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
        Schema::create('tusuarioadm', function (Blueprint $table) {
            $table->id(); // Cria uma coluna 'id' auto-incremento
            $table->string('nome_fantasia');
            $table->string('cpfcnpj');
            $table->string('senha');
            $table->string('numeroTelefone');
            $table->string('logradouro');
            $table->string('bairro');
            $table->string('numero');
            $table->string('cep');
            $table->string('uf');
            $table->boolean('ativo')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tusuarioadm');
    }
};
