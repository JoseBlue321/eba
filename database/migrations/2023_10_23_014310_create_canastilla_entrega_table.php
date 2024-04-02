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
        Schema::create('canastilla_entrega', function (Blueprint $table) {
            $table->id();
            //Relation with entregas
            $table->unsignedBigInteger('entrega_id')->nullable();
            $table->foreign('entrega_id')->references('id')->on('entregas');
            //Relation with canastillas
            $table->unsignedBigInteger('canastilla_id')->nullable();
            $table->foreign('canastilla_id')->references('id')->on('canastillas');
    
            $table->integer('cantidad')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entrega_canastilla');
    }
};
