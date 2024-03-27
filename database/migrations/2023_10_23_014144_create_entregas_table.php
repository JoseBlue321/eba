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
        Schema::create('entregas', function (Blueprint $table) {
            $table->id();
            $table->integer('codigo');
            $table->date('fecha_emision');
            $table->date('fecha_entrega');
            $table->string('destino');

            //Relation with Origenes
            $table->unsignedBigInteger('origen_id')->nullable();
            $table->foreign('origen_id')->references('id')->on('origenes');

            //Relation with Transportadoras
            $table->unsignedBigInteger('transportadora_id')->nullable();
            $table->foreign('transportadora_id')->references('id')->on('transportadoras');

            //Relation with Departamentos
            $table->unsignedBigInteger('departamento_id')->nullable();
            $table->foreign('departamento_id')->references('id')->on('departamentos');

            //Relation with Tipo de ventas
            $table->unsignedBigInteger('tipoventa_id')->nullable();
            $table->foreign('tipoventa_id')->references('id')->on('tipoventas');

            //Relation with Mercados
            $table->unsignedBigInteger('mercado_id')->nullable();
            $table->foreign('mercado_id')->references('id')->on('mercados');

            


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entregas');
    }
};
