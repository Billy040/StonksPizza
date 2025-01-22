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
            $table->foreignId('bestelling_id')->constrained('bestelling')->onDelete('cascade');
            $table->foreignId('pizza_id')->constrained('pizza')->onDelete('cascade');
            $table->foreignId('formaat_id')->constrained('formaat')->onDelete('cascade');
            $table->string('telefoonnummer')->nullable();
            $table->integer('aantal');
            $table->decimal('prijs', 8, 2);
            $table->primary(['bestelling_id', 'pizza_id', 'formaat_id']);
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
