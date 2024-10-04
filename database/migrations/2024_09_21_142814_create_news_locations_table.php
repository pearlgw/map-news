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
        Schema::create('news_locations', function (Blueprint $table) {
            $table->id();
            $table->string('time')->nullable();
            $table->string('casualities')->nullable(); //korban
            $table->string('supplies')->nullable(); //perlengkapan
            $table->string('disaster')->nullable(); //bencana
            $table->string('organization')->nullable(); //organisasi
            $table->string('scale')->nullable(); //skala
            $table->string('person')->nullable(); //yang bertanggung jawab
            $table->string('city')->nullable();
            $table->string('latitude')->unique();
            $table->string('longitude')->unique();
            $table->timestamps();
        });
    }
// LOCATION		jadi tag
// TIME		20.00
// CASUALITIES
// SUPPLIES
// DISASTER		gempa bumi
// ORGANIZATION
// SCALE
// PERSON

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news_locations');
    }
};