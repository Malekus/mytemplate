<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonneRdvTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personne_rdv', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('personne_id')->unsigned()->index();
            $table->foreign('personne_id')->references('id')->on('personnes')->onDelete('cascade');
            $table->integer('rdv_id')->unsigned()->index();
            $table->foreign('rdv_id')->references('id')->on('rdvs')->onDelete('cascade');
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
        Schema::dropIfExists('personne_rdv');
    }
}
