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
        Schema::create('propriete_caracteristiques', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('propriete_id');
            $table->foreign('propriete_id')->references('id')->on('proprietes')->onDelete('cascade');
            $table->unsignedBigInteger('caracteristique_id');
            $table->foreign('caracteristique_id')->references('id')->on('caracteristiques')->onDelete('cascade');
            $table->boolean('deleted');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('propriete_caracteristiques');
    }
};
