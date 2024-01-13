<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    { 
        
        Schema::create('fournisseurs' , function (Blueprint $table){
            $table->id();
            $table->string('name');
            $table->string('tel');
            $table->string('fax')->nullable();
            $table->string('address');
            $table->string('mail')->nullable();
            $table->string('ice');
            $table->string('i_f');
            $table->string('cnss');
            $table->string('rc');
            $table->text('patente');
            $table->string('delege_comercial');
            $table->string('tel_delege_comercial');
            $table->integer('created_by')->nullable();
            $table->timestamps(); // The timestamps method creates created_at and updated_at TIMESTAMP equivalent columns

        });


        Schema::create('type_reglements' , function (Blueprint $table ){
            $table->id();
            $table->string('libelle_type');
        });


        Schema::create('reglement_factures' , function(Blueprint $table){
            $table->id();
            $table->foreignId('type_reglement_id')->constrained();
            $table->foreignId('facture_id')->constrained()->cascadeOnDelete();
            $table->date('date_reglement');
            $table->integer('created_by');
            $table->timestamps();
        });


        Schema::create('factures' , function(Blueprint $table){
            $table->id();
            $table->foreignId('reglement_facture_id')->constrained()->cascadeOnDelete();
            $table->string('num_facture');
            $table->date('date_facture');
            $table->date('echeacnce');
            $table->date('start_periode');
            $table->date('fin_periode');
            $table->decimal('montant_facture' , 10);
            $table->integer('created_by');
            $table->timestamps();

        });


        
    }
    public function down(): void
    {
        Schema::dropIfExists('fournisseurs');
        Schema::dropIfExists('factures');
        Schema::dropIfExists('reglement_factures');
        Schema::dropIfExists('type_reglements');

        

    }
};

