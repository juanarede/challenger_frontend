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
        Schema::create('detalle_pedidos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('PedidoID');
            $table->unsignedBigInteger('ProductoID');
            $table->foreign('PedidoID')->references('id')->on('pedidos');
            $table->foreign('ProductoID')->references('id')->on('productos');
            $table->integer('Cantidad');
            $table->decimal('PrecioUnitario', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalle_pedidos');
    }
};
