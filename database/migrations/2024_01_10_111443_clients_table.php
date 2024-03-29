<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('clients' , function(Blueprint $table){
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('cin');
            $table->string('adresse_client');
            $table->string('tel_client');
            $table->integer('created_by');
            $table->timestamps();
        });


        Schema::create('reglements' , function(Blueprint $table){
            $table->id();
            $table->date('date_reglement');
            $table->decimal('montant_reglement');
            $table->integer('created_by');
            $table->timestamps();
            
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('clients');
        Schema::dropIfExists('reglements');
    }
};
