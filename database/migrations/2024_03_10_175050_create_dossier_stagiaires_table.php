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
        Schema::create('dossier_stagiaires', function (Blueprint $table) {
            $table->id();
            $table->date('date_confirmation');
            $table->string('num_dossier');
            $table->unsignedBigInteger('document_id');
            $table->foreign('document_id')->references('id')->on('documents')->onDelete('restrict')->onUpdate('cascade');
            $table->unsignedBigInteger('stagiaire_id');
            $table->foreign('stagiaire_id')->references('id')->on('stagiaires')->onDelete('restrict')->onUpdate('cascade');
            $table->unsignedBigInteger('inscription_id');
            $table->foreign('inscription_id')->references('id')->on('inscrip_solicits')->onDelete('restrict')->onUpdate('cascade');
            $table->unsignedBigInteger('tuteur_id');
            $table->foreign('tuteur_id')->references('id')->on('tuteurs')->onDelete('restrict')->onUpdate('cascade');
            $table->unsignedBigInteger('reservation_id');
            $table->foreign('reservation_id')->references('id')->on('reservations')->onDelete('restrict')->onUpdate('cascade');
            $table->unsignedBigInteger('nationalite_id');
            $table->foreign('nationalite_id')->references('id')->on('nationalites')->onDelete('restrict')->onUpdate('cascade');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dossier_stagiaires');
    }
};
