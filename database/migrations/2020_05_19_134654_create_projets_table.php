<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('intitule');
            $table->string('activite')->nullable();
            $table->string('description')->nullable();
            $table->date('date_debut');
            $table->date('date_fin')->nullable();
            $table->string('statut')->default("en cours");

            /*  $table->integer('beneficiaire_id')->unsigned()->index();
                $table->foreign('beneficiaire_id')->references('id')->on('beneficiaires')->onDelete('cascade');
                $table->integer('conseiller_id')->unsigned()->index();
                $table->foreign('conseiller_id')->references('id')->on('conseillers')->onDelete('cascade');
            */
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
        Schema::dropIfExists('projets');
    }
}
