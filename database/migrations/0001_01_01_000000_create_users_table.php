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
        Schema::create('users', function (Blueprint $table) {
            $table->id();

            $table->string('civilite')->nullable(); 
            $table->string('nom')->nullable(); 
            $table->string('prenom')->nullable(); 
            $table->string('cin')->nullable(); 
            $table->date('dob')->nullable(); 
            $table->string('adresse')->nullable(); 
            $table->string('adresse_complementaire')->nullable(); 
            $table->string('code_postal')->nullable(); 
            $table->string('ville')->nullable(); 
            $table->string('tel_mobile')->nullable(); 
            $table->string('tel_fixe')->nullable(); 
            $table->string('email_personnel');
            $table->string('identifiant')->nullable(); 
            $table->string('statut')->nullable(); 
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->boolean('is_active')->default(true);
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
