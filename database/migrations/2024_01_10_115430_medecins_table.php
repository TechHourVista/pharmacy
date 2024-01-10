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
        Schema::create('medecins' , function(Blueprint $table){
            $table->id();
            $table->string('name');
            $table->string('specialite_medecin');
            $table->string('gsm_medecin');
            $table->string('tel_medecin');
            $table->string('fax_medecin')->nullable();
            $table->string('adresse_medecin')->nullable();
            $table->integer('created_by');
            $table->timestamps();
        });


        Schema::create('ordonnaces' , function(Blueprint $table){
            $table->id();
            $table->foreignId('medecin_id')->constrained();
            $table->date('date_ordonnace');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

        Schema::dropIfExists('medecins');
        Schema::dropIfExists('ordonnaces');
    
    }
};
