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
    {Schema::dropIfExists('films');
        Schema::create('films', function (Blueprint $table) {
            $table->id();
            $table->string('titre',50);
            $table->string('resume',5000);
            $table->string('duree',30);
            $table->integer('annee');
            $table->foreignId('realisateur_id')->constrained('personnes');
            $table->foreignId('producteur_id')->constrained('personnes');
            //$table->unsignedBigInteger('realisateur');
            //$table->foreign('realisateur_id')->references('id')->on('personnes');
            //$table->unsignedBigInteger('producteur');
            //$table->foreign('producteur')->references('id')->on('personnes');
            $table->string('lienFilm')->nullable();
            $table->string('pochetteURL')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('films');
    }
};
