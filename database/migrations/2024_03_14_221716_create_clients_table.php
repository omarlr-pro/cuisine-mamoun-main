<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('civilite')->nullable();
            $table->string('nom');
            $table->string('prenom');
            $table->string('type');
            $table->date('dob')->nullable();
            $table->string('adresse');
            $table->string('adresse_complementaire')->nullable();
            $table->string('code_postal');
            $table->string('ville');
            $table->string('tel_mobile');
            $table->string('tel_fixe')->nullable();
            $table->string('email')->nullable();
            $table->string('origine_dossier')->nullable();
            $table->string('nature_project')->nullable();
            $table->string('prospecteur')->nullable();
            $table->string('qualiticien')->nullable();
            $table->string('categorie')->nullable();
            $table->string('segment')->nullable();
            $table->string('critere')->nullable();
            $table->string('vendu')->nullable();
            $table->string('contact')->nullable();
            $table->string('qualification')->nullable();
            $table->string('mesure')->nullable();
            $table->string('decouverte')->nullable();
            $table->string('solution_plan')->nullable();
            $table->string('argumentaire')->nullable();
            $table->string('annonce_prix')->nullable();
            $table->string('passage_main')->nullable();
            $table->string('decision')->nullable();
            $table->string('vente')->nullable();
            $table->string('sale')->nullable();
            $table->date('step_completed_date')->nullable();
            $table->text('description')->nullable();
            $table->text('whoaddit')->default("inconnu");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
};
