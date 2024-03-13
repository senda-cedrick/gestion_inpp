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
        Schema::create('coordonners', function (Blueprint $table) {
            $table->id();
            $table->string('adresse_complete');
            $table->string('code_postal');
            $table->string('district');
            $table->string('email');
            $table->string('mobil');
            $table->string('mobil_fixe')->nullable();
            $table->string('pays');
            $table->string('province');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coordonners');
    }
};