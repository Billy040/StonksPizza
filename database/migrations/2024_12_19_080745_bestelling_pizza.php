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
        Schema::create('bestelling_pizza', function (Blueprint $table) {
            $table->foreignId('bestelling_id')->constrained('bestelling');
            $table->foreignId('pizza_id')->constrained('pizza');
            $table->primary(['bestelling_id', 'pizza_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bestelling_pizza');
    }
};
