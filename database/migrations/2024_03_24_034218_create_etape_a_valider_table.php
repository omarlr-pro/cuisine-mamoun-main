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
            $table->date('date');
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
