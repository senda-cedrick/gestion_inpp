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
            $table->unsignedBigInteger('stagiaire_id');
<<<<<<< HEAD
            $table->foreign('stagiaire_id')->references('id')->on('stagiaires')->onDelete('cascade')->onUpdate('cascade');
=======
            $table->foreign('stagiaire_id')->references('id')->on('stagiaires')->onDelete('restrict')->onUpdate('cascade');
>>>>>>> 1a5d1b22 (Initial commit)
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
