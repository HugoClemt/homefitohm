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
        Schema::create('options', function (Blueprint $table) {
            $table->id();
            $table->decimal('prix', 8, 2);
            $table->string('phone');
            $table->string('email');
            $table->string('adresse');
            $table->string('ville');
            $table->string('code_postal');
            $table->string('lundi_horaire');
            $table->string('mardi_horaire');
            $table->string('mercredi_horaire');
            $table->string('jeudi_horaire');
            $table->string('vendredi_horaire');
            $table->string('samedi_horaire');
            $table->string('dimanche_horaire');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
