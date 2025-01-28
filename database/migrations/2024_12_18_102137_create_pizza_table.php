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
        Schema::create('pizza', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->id();
            $table->string('naam');
            $table->string('beschrijving');
            $table->decimal('prijs', 5, 2);
            $table->binary('image')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pizza');
    }
};
