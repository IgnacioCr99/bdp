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
        Schema::create('pagos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('estado_pago_id');
            $table->string('monto_pago');
            $table->date('fecha_pago');
            $table->string('monto_pagado_px');
            $table->string('monto_custodia');
            $table->date('fecha_ultimo_abono');
            $table->date('fecha_venc_px');
            $table->string('monto_pagado_tenedor');
            $table->string('origen_pago');
            $table->foreign('estado_pago_id')
            ->references('id')
            ->on('estados_pago')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tipos_pagos');
    }
};
