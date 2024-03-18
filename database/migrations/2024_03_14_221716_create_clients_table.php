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
            $table->string('gender')->nullable();
            $table->string('last_name');
            $table->string('first_name');
            $table->string('client_type');
            $table->date('dob')->nullable();
            $table->string('address');
            $table->string('address_additional')->nullable();
            $table->string('zipcode');
            $table->string('city');
            $table->string('mobile_phone');
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('dossier_origin')->nullable();
            $table->string('project_nature')->nullable();
            $table->string('prospecteur')->nullable();
            $table->string('qualiticien')->nullable();
            $table->string('category')->nullable();
            $table->string('contact')->nullable();
            $table->string('qualification')->nullable();
            $table->string('measure')->nullable();
            $table->string('discovery')->nullable();
            $table->string('solution_plan')->nullable();
            $table->string('argumentation')->nullable();
            $table->string('price_announcement')->nullable();
            $table->string('handover')->nullable();
            $table->string('decision')->nullable();
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
