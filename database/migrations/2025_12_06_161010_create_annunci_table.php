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
        Schema::create('annunci', function (Blueprint $table) {
            $table->id();
            $table->string('titolo');
            $table->text('descrizione');
            $table->decimal('prezzo',8,2);
            $table->boolean('pubblicato_SN')->nullable();

            $table->unsignedBigInteger('id_utente');
            $table->unsignedBigInteger('id_categoria')->nullable();

            $table->timestamps();

            $table->foreign('id_utente')->references('id')->on('users');
            $table->foreign('id_categoria')->references('id')->on('categorie')->onDelete('SET NULL');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('annunci');
    }
};
