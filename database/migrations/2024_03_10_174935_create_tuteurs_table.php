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
        Schema::create('tuteurs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('coordonner_id');
            $table->foreign('coordonner_id')->references('id')->on('coordonners')->onDelete('restrict')->onUpdate('cascade');
            $table->string('nom_entreprise');
            $table->string('adresse_entreprise');
            $table->string('contact_entreprise');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tuteurs');
    }
};
