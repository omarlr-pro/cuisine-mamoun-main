<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelancesTable extends Migration
{
    /**
     * Exécuter les migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relances', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_id') ->constrained()->onDelete('cascade');;
            $table->date('rdv_relance_date')->nullable();
            $table->time('rdv_relance_heure')->nullable();
            $table->date('relance_date')->nullable();
            $table->time('relance_heure')->nullable();
            $table->string('isannuler');
            $table->text('remarque')->nullable();
            $table->string("whoaddit")->default("inkonnu");
            $table->timestamps();
        });
    }

    /**
     * Annuler les migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('relances');
}
}