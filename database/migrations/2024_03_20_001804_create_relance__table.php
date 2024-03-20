User
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelanceTable extends Migration
{
    /**
     * Exécuter les migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relance', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_id')->constrained();
            $table->dateTime('Reporter_la_relance')->nullable();
            $table->string('isannuler')->default("false");
            $table->text('Remarque')->nullable();
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
        Schema::dropIfExists('remarks');
    }
}