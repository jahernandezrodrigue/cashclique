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
        Schema::create('budgets', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('unids')->nullable();
            $table->double('valor')->default(0);
            $table->unsignedBigInteger('expensetype_id');
            $table->boolean('isActive')->default(true);
            $table->timestamps();

            $table->foreign('expensetype_id')->references('id')->on('expense_types')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('budgets');
    }
};
