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
        Schema::create('tproduto', function (Blueprint $table) {
            $table->id('codigo'); // Auto-incremento e chave primária
            $table->string('nomeProduto');
            $table->text('descricao')->nullable();
            $table->foreignId('codigoCategoria')->constrained('tcategoria')->onDelete('cascade'); // Chave estrangeira
            $table->text('observacoes')->nullable();
            $table->boolean('ativo')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tproduto');
    }
};
