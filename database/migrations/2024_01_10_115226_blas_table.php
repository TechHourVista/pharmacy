<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('bl_avoires' , function (Blueprint $table){
            $table->id();
            $table->foreignId('fournisseur_id')->constrained();
            $table->foreignId('facture_id')->nullable()->constrained()->cascadeOnDelete();
            $table->string('num_bla')->unique();
            // $table->date('date_bla');
            $table->boolean('is_avoir')->default(false);
            $table->decimal('montant_bonliversion' , 10);
            $table->boolean('is_paid')->default(false);
            $table->integer('created_by');
            $table->timestamps();
        });

        Schema::create('detail_BLAs' , function(Blueprint $table){
            $table->id();
            $table->foreignId('bl_avoire_id')->nullable()->constrained()->cascadeOnDelete();
            $table->foreignId('data_TVA_id')->unique()->nullable()->constrained();
            $table->foreignId("produit_id")->constrained();
            $table->integer('qte_achate')->nullable();
            $table->decimal('pu_public')->nullable();
            $table->decimal('pu_pph')->nullable();
            $table->date('expired_at')->nullable();
        });

        // Schema::create('produit_in_BLAs' , function(Blueprint $table) {
        //     $table->id();
        //     $table->foreignId('detail_BLA_id')->constrained();
        //     $table->foreignId('produit_id')->constrained()->cascadeOnDelete();
        //  });

        Schema::create('data_TVAs' , function(Blueprint $table) {
            $table->id();
            $table->integer('code_tva');
            $table->decimal('taux_tva');
            $table->string('libelle_tva')->nullable();
         });

    }

   
    public function down(): void
    {
        Schema::dropIfExists('bl_avoires');
        Schema::dropIfExists('detail_BLAs');
        Schema::dropIfExists('data_TVAs');

        // Schema::dropIfExists('produit_in_BLAs');


    }
};
