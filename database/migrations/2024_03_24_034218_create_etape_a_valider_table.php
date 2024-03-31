<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtapeAValiderTable  extends Migration
{
    public function up()
    {
        Schema::create('etapes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_id')->constrained()->onDelete('cascade');
            $table->string('valide_par');
            $table->date('rdv_relance_date')->nullable();
            $table->time('rdv_relance_heure')->nullable();
            $table->date('relance_date')->nullable();
            $table->time('relance_heure')->nullable();
            $table->string('isannuler')->default("false");
            $table->text('remarque')->nullable();
            $table->string('etape');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('etapes');
    }
}
