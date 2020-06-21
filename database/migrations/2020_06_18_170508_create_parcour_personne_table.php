<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParcourPersonneTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parcour_personne', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('parcour_id')->unsigned()->index();
            $table->foreign('parcour_id')->references('id')->on('parcours')->onDelete('cascade');
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
        Schema::dropIfExists('parcour_personne');
    }
}
