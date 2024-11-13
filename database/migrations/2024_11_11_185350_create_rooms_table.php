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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_indekos');
            $table->integer('room_number');
            $table->integer('price');
            $table->boolean('furnished')->default(false);
            $table->boolean('private_restroom')->default(false);
            $table->boolean('air_conditioner')->default(false);
            $table->timestamps();
            
            $table->foreign('id_indekos')->references('id')->on('indekos')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
