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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->date('transaction_date');
            $table->unsignedBigInteger('id_customer');
            $table->unsignedBigInteger('id_room');
            $table->integer('transaction_value');
            $table->text('notes')->nullable();
            $table->timestamps();

            $table->foreign('id_customer')->references('id')->on('customers')->onDelete('cascade');
            $table->foreign('id_room')->references('id')->on('rooms')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
