<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParcoursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parcours', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('beneficiaire_id')->unsigned()->index();
            $table->foreign('beneficiaire_id')->references('id')->on('beneficiaires')->onDelete('cascade');
            $table->integer('projet_id')->unsigned()->index();
            $table->foreign('projet_id')->references('id')->on('projets')->onDelete('cascade');
            $table->integer('conseiller_id')->unsigned()->index();
            $table->foreign('conseiller_id')->references('id')->on('conseillers')->onDelete('cascade');
            $table->integer('prescripteur_id')->unsigned()->index();
            $table->foreign('prescripteur_id')->references('id')->on('prescripteurs')->onDelete('cascade');
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
        Schema::dropIfExists('parcours');
    }
}
