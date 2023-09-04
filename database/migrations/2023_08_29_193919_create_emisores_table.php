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
        Schema::create('emisores', function (Blueprint $table) {
            $table->id();
            $table->string('rut')->nullable();
            $table->string('dv')->nullable();
            $table->string('correo')->nullable();
            $table->string('nemotecnico')->nullable();
            $table->string('razon_social')->nullable();
            $table->string('direccion')->nullable();
            $table->string('telefono')->nullable();
            $table->string('comuna_id')->nullable();
            $table->string('ciudad_id')->nullable();
            $table->foreign('comuna_id')
            ->references('id')
            ->on('comunas')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->foreign('ciudad_id')
            ->references('id')
            ->on('ciudades')
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
        Schema::dropIfExists('emisor');
    }
};
