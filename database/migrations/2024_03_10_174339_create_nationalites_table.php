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
        Schema::create('nationalites', function (Blueprint $table) {
            $table->id();
            $table->string('nationalite_congo');
            $table->string('nationalite_afrique');
            $table->string('resident_congo');
            $table->string('titulaire_bac');
            $table->string('cycle_licence');
            $table->unsignedBigInteger('user_id');
<<<<<<< HEAD
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
=======
            $table->foreign('user_id')->references('id')->on('users')->onDelete('restrict')->onUpdate('cascade');
>>>>>>> 1a5d1b22 (Initial commit)
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nationalites');
    }
};
