<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->foreignId('role_id')->constrained()->cascadeOnDelete(); 
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('roles', function (Blueprint $table) {

            $table->id();
            $table->string('role_name')->nullable();
            $table->boolean('fournisseur_show');
            $table->boolean('fournisseur_add');
            $table->boolean('produit_show');
            $table->boolean('produit_add');
            $table->boolean('client_show');
            $table->boolean('client_add');
            $table->boolean('user_role');
            $table->boolean('blaf_show');
            $table->boolean('blaf_add');
            $table->boolean('vente_show');
            $table->boolean('vente_add');
            $table->boolean('medecin_show');
            $table->boolean('medecin_add');
            $table->boolean('reglement_show');
            $table->boolean('reglement_add');
            $table->boolean('is_superAdmin');
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('roles');
    }
};
