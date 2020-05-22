<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrestationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('dispositif');
            $table->string('statut')->default("en cours");
            $table->string('type_sortie');
            $table->string('motif_sortie');
            $table->string('viabilite');
            $table->string('delai_realisation');
            $table->string('orientation');
            $table->string('libelle')->nullable();
            $table->date('date_debut');
            $table->date('date_fin')->nullable();
            $table->integer('parcours_id')->unsigned()->index();
            $table->foreign('parcours_id')->references('id')->on('parcours')->onDelete('cascade');
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
        Schema::dropIfExists('prestations');
    }
}
