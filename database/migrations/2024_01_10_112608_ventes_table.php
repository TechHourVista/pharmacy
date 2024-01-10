<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('ventes' , function(Blueprint $table){
            $table->id();
            $table->foreignId('ordonnace_id')->constrained()->cascadeOnDelete();
            $table->foreignId('client_id')->constrained()->cascadeOnDelete();
            $table->date('date_vente');
            $table->integer('qte_vente');
            $table->integer('created_by');
            $table->timestamps();
        });

        Schema::create('reglements_ventes' , function(Blueprint $table){
            $table->id();
            $table->foreignId('vente_id')->constrained()->cascadeOnDelete();
            $table->foreignId('reglement_id')->constrained()->cascadeOnDelete();
        });

        Schema::create('produit_vente___s' , function(Blueprint $table){
            $table->id();
            $table->foreignId('vente_id')->constrained()->cascadeOnDelete();
            $table->foreignId('detail_BLA_id')->constrained()->cascadeOnDelete();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('ventes');
        Schema::dropIfExists('reglements_ventes');
        Schema::dropIfExists('produit_vente___s');
        
    }
};
