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
        Schema::create('tpedidoitem', function (Blueprint $table) {
            $table->id('codigo'); // Chave primária auto-incremento
            $table->unsignedBigInteger('codpedido'); // Coluna para chave estrangeira
            $table->unsignedBigInteger('codproduto'); // Coluna para chave estrangeira
            $table->decimal('preco_custo', 10, 2);
            $table->decimal('preco_venda', 10, 2);
            $table->decimal('preco_total', 10, 2);
            $table->decimal('desconto', 10, 2)->nullable();
            $table->timestamps();

            // Definindo chaves estrangeiras
            $table->foreign('codpedido')->references('codigo')->on('tpedido')->onDelete('cascade');
            $table->foreign('codproduto')->references('codigo')->on('tproduto')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tpedidoitem');
    }
};
