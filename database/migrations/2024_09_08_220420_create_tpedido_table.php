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
        Schema::create('tpedido', function (Blueprint $table) {
            $table->id('codigo');
            $table->string('numero_pedido');
            $table->unsignedBigInteger('codusuarioadm');
    
            // Defina a chave estrangeira apenas se a tabela referenciada estiver presente
            if (Schema::hasTable('tusuarioadm')) {
                $table->foreign('codusuarioadm')->references('id')->on('tusuarioadm')->onDelete('cascade');
            }
    
            $table->unsignedBigInteger('codcliente');
            $table->decimal('preco_custo', 10, 2);
            $table->decimal('preco_venda', 10, 2);
            $table->decimal('valor_total', 10, 2);
            $table->string('situacao');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tpedido');
    }
};
