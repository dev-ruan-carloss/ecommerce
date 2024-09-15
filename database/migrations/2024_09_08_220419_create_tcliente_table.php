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
        Schema::create('tcliente', function (Blueprint $table) {
            $table->id('codigo'); // Chave primária auto-incremento
            $table->string('nome');
            $table->string('cpfcnpj')->unique();
            $table->string('senha');
            $table->string('numeroTelefone')->nullable();
            $table->text('endereco')->nullable();
            $table->string('bairro')->nullable();
            $table->string('numeroCasa')->nullable();
            $table->string('cep')->nullable();
            $table->string('uf', 2)->nullable(); // Estado (Unidade Federativa)
            $table->boolean('ativo')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tcliente');
    }
};
