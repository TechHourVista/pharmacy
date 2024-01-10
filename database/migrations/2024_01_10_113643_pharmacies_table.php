<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('pharmacies' , function(Blueprint $table){
            $table->id();
            $table->string('nom_pharmacie');
            $table->string('tel_pharmacie');
            $table->string('adresse_pharmacie');

        });

        Schema::create('pharmice_changes_produits' , function (Blueprint $table){
            $table->id();
            $table->foreignId('change_produit_id')->constrained()->cascadeOnDelete();
            $table->foreignId('pharmacie_id')->constrained()->cascadeOnDelete();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('pharmacies');
        Schema::dropIfExists('pharmice_changes_produits');

    }
};



