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
        Schema::create('operaciones', function (Blueprint $table) {
            $table->id();
            $table->string('numero_lote');
            $table->date('fecha_operacion');
            $table->date('fecha_liquidacion');
            $table->string('tasa_financiamiento');
            $table->string('tasa_efectiva_venta');
            $table->string('tasa_compra');
            $table->unsignedBigInteger('valor_total');
            $table->unsignedBigInteger('numero_operacion_bolsa');
            $table->string('nemotecnico');
            $table->string('forma_de_pago');
            $table->float('tasa_bolsa');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('operaciones');
    }
};
