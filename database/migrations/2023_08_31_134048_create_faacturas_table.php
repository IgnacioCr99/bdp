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
        Schema::create('faacturas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tipo_factura_id')->nullable();
            $table->unsignedBigInteger('pago_id')->nullable();
            $table->unsignedBigInteger('operacion_id')->nullable();
            $table->unsignedBigInteger('inversionista_id')->nullable();
            $table->unsignedBigInteger('emisor_id')->nullable();
            $table->unsignedBigInteger('ejecutivo_id')->nullable();
            $table->unsignedBigInteger('cedente_id')->nullable(); 
            $table->unsignedBigInteger('pagador_id')->nullable();
            $table->string('folio');
            $table->date('fecha_vencimiento');
            $table->unsignedBigInteger('monto_documento');
            $table->unsignedBigInteger('monto_transado');
            $table->unsignedBigInteger('valor_vencimiento');
            $table->string('saldo_deudor_inversionista');
            $table->string('porcentaje_anticipo');
            $table->string('nemotecnico');
            $table->float('tasa_efectiva_compra');
            $table->float('tasa_efectiva_venta');
            $table->integer('comision');
            $table->integer('iva');
            $table->foreign('tipo_factura_id')
            ->references('id')
            ->on('tipos_factura')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->foreign('pago_id')
            ->references('id')
            ->on('pagos')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->foreign('operacion_id')
            ->references('id')
            ->on('operaciones')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->foreign('inversionista_id')
            ->references('id')
            ->on('inversionistas')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->foreign('emisor_id')
            ->references('id')
            ->on('emisores')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->foreign('ejecutivo_id')
            ->references('id')
            ->on('ejecutivos')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->foreign('cedente_id')
            ->references('id')
            ->on('cedentes')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->foreign('pagador_id')
            ->references('id')
            ->on('pagadores')
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
        Schema::dropIfExists('faacturas');
    }
};
