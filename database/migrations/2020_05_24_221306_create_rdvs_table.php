<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRdvsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rdvs', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date_rdv');
            $table->time('heure_debut');
            $table->time('heure_fin');
            $table->string('libelle')->nullable();
            $table->string('status')->default("Présent");
            $table->string('motif_abs')->nullable();
            $table->integer('rang_rdv');
            $table->integer('rang_rdv_p')->default(0);
            $table->integer('prestation_id')->unsigned()->index();
            $table->foreign('prestation_id')->references('id')->on('prestations')->onDelete('cascade');
            $table->integer('conseiller_id')->unsigned()->index();
            $table->foreign('conseiller_id')->references('id')->on('conseillers')->onDelete('cascade');
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
        Schema::dropIfExists('rdvs');
    }
}
