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
        Schema::create('proprietes', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->string('description');
            $table->enum('status', ['louer', 'vendre']);
            $table->integer('nbPiece');
            $table->integer('nbChambre');
            $table->integer('nbSalleBain');
            $table->integer('nbToillete');
            $table->integer('prix');
            $table->float('surface');
            $table->string('adresse');
            $table->string('pays');
            $table->string('ville');
            $table->string('quartier');
            $table->string('nomPC');
            $table->string('prenomPC');
            $table->string('emailPC');
            $table->integer('telPC');
            $table->unsignedBigInteger('type_propriete_id');
            $table->foreign('type_propriete_id')->references('id')->on('type_proprietes')->onDelete('cascade');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->boolean('deleted');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proprietes');
    }
};
