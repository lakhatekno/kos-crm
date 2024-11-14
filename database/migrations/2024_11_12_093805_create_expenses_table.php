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
        Schema::create('expenses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_indekos');
            $table->unsignedBigInteger('id_category');
            $table->unsignedBigInteger('id_bank_account');
            $table->date('expense_date');
            $table->integer('expense_value');
            $table->timestamps();

            $table->foreign('id_indekos')->references('id')->on('indekos')->onDelete('cascade');
            $table->foreign('id_category')->references('id')->on('expense_categories')->onDelete('cascade');
            $table->foreign('id_bank_account')->references('id')->on('bank_accounts')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('expenses');
    }
};
