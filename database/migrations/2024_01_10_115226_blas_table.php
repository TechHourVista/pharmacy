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
            $table->foreignId('facture_id')->constrained()->cascadeOnDelete();
            $table->string('num_bla');
            $table->date('date_bla');
            $table->boolean('is_avoir');
            $table->boolean('is_paid');
            $table->integer('created_by');
            $table->timestamps();
        });

        Schema::create('detail_BLAs' , function(Blueprint $table){
            $table->id();
            $table->foreignId('bl_avoire_id')->constrained()->cascadeOnDelete();
            $table->foreignId('data_TVA_id')->constrained();
            $table->integer('qte_achate');
            $table->decimal('pu_public');
            $table->decimal('pu_pph');
            $table->date('expired_at');
        });
    }

   
    public function down(): void
    {
        Schema::dropIfExists('bl_avoires');
        Schema::dropIfExists('detail_BLAs');

    }
};
