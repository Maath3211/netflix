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
    {Schema::dropIfExists('personnes');
        Schema::create('personnes', function (Blueprint $table) {
            $table->id();
            $table->string('nom',255);
            $table->date('date');
            $table->string('sexe',1);
            $table->string('photo',1024);
            $table->boolean('realisateur')->default(false);
            $table->boolean('producteur')->default(false);
            $table->boolean('acteur')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personnes');
    }
};
