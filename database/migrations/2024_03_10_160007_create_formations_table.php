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
        Schema::create('formations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('filiere_id');
            $table->foreign('filiere_id')->references('id')->on('filieres')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('option_id');
            $table->foreign('option_id')->references('id')->on('options')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('formateur_id');
            $table->foreign('formateur_id')->references('id')->on('formateurs')->onDelete('cascade')->onUpdate('cascade');
            $table->date('dateDebut');
            $table->date('dateFin');
            $table->integer('nbrStg');
            $table->unsignedBigInteger('vacation_id');
            $table->foreign('vacation_id')->references('id')->on('vacations')->onDelete('cascade')->onUpdate('cascade');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formations');
    }
};
