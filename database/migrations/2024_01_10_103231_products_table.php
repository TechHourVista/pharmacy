<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('categories' , function(Blueprint $table){
            $table->id();
            $table->string('libelle_categorie');
        });

        Schema::create('produits' , function(Blueprint $table){
            $table->id();
            $table->foreignId('categorie_id')->constrained()->cascadeOnDelete();
            $table->string('designation')->nullable();
            $table->string('code_barres');
            $table->integer('created_by');
            $table->timestamps();
        });


        Schema::create('produit_in_BLAs' , function(Blueprint $table) {
           $table->id();
           $table->foreignId('detail_BLA_id')->constrained();
           $table->foreignId('produit_id')->constrained()->cascadeOnDelete();
        });

        Schema::create('data_TVAs' , function(Blueprint $table) {
            $table->id();
            $table->integer('code_tva');
            $table->decimal('taux_tva');
            $table->string('libelle_tva')->nullable();
         });

         Schema::create('change_produits' , function(Blueprint $table){
            $table->id();
            $table->integer('qte_change');
            $table->date('date_change_produit');
            $table->boolean('is_inout');
            $table->integer('created_by');
            $table->timestamps();
        });

        Schema::create('change_produits_with_detail_BLAs',function(Blueprint $table){
            $table->id();
            $table->foreignId('detail_BLA_id')->constrained();
            $table->foreignId('change_produit_id')->constrained()->cascadeOnDelete();

        });

    }
    public function down(): void
    {
        Schema::dropIfExists('categories');
        Schema::dropIfExists('produits');
        Schema::dropIfExists('produit_in_BLAs');
        Schema::dropIfExists('data_TVAs');
        Schema::dropIfExists('change_produits');
        Schema::dropIfExists('change_produits_with_detail_BLAs');
    }
};
