<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrescripteursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prescripteurs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom');
            $table->string('adresse')->nullable();
            $table->string('code_postal')->nullable();
            $table->string('ville')->nullable();
            $table->string('tel')->nullable();
            $table->string('email')->nullable();
            $table->string('website')->nullable();
            $table->integer('referent_id')->unsigned()->index();
            $table->foreign('referent_id')->references('id')->on('referents')->onDelete('cascade');
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
        Schema::dropIfExists('prescripteurs');
    }
}
