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
        Schema::create('cuentas_corriente', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('inversionista_id');
            $table->unsignedBigInteger('saldo_final');
            $table->string('estado');
            $table->foreign('inversionista_id')
            ->references('id')
            ->on('inversionistas')
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
        Schema::dropIfExists('cuenta_corriente');
    }
};
