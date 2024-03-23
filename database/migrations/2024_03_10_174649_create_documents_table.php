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
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->string('attestation_diplome')->nullable();
            $table->string('attestation_med')->nullable();
            $table->string('attestation_nationalite')->nullable();
            $table->string('bonne_vie_moeurs')->nullable();
            $table->string('bulletins')->nullable();
            $table->string('bulletins2')->nullable();
            $table->unsignedBigInteger('stagiaire_id');
            $table->foreign('stagiaire_id')->references('id')->on('stagiaires')->onDelete('cascade')->onUpdate('cascade');
            $table->string('photo_pass')->nullable();
            $table->string('preuve_paiement')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('documents');
    }
};
