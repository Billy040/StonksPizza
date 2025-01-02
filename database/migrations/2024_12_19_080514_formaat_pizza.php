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
        Schema::create('formaat_pizza', function (Blueprint $table) {
            $table->foreignId('formaat_id')->constrained('formaat');
            $table->foreignId('pizza_id')->constrained('pizza');
            $table->primary(['formaat_id', 'pizza_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formaat_pizza');
    }
};
