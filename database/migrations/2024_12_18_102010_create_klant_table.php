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
        Schema::create('klant', function (Blueprint $table) {
            $table->id();
            $table->string('naam', 100);
            $table->string('adres', 100);
            $table->string( 'telefoonnummer', 10)->unique();
            $table->string('email', 100)->unique();
            $table->string('wachtwoord', 100);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('klant');
    }
};
