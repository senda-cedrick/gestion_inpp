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
        Schema::create('stagiaires', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->date('date_nais');
            $table->string('lieu_nais');
            $table->string('nationalite');
            $table->integer('nbr_enfant')->nullable();
            $table->string('nom_conjoint')->nullable();
            $table->string('nom_stagiaire');
            $table->string('num_carte_stag')->unique();
            $table->string('num_passeport')->nullable();
            $table->string('num_carte_elect')->nullable();
            $table->string('pays_nais');
            $table->string('postnom_stag');
            $table->string('prenom_stag');
            $table->string('sexe_stg');
            $table->string('status_stag')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stagiaires');
    }
};
