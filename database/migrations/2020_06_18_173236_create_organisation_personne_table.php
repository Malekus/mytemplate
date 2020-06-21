<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrganisationPersonneTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organisation_personne', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('organisation_id')->unsigned()->index();
            $table->foreign('organisation_id')->references('id')->on('organisations')->onDelete('cascade');
            $table->integer('personne_id')->unsigned()->index();
            $table->foreign('personne_id')->references('id')->on('personnes')->onDelete('cascade');
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
        Schema::dropIfExists('organisation_personne');
    }
}
