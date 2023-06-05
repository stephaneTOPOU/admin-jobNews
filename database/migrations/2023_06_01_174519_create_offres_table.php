<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offres', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('categorie_id')->unsigned();
            $table->string('nom')->nullable();
            $table->string('entreprise')->nullable();
            $table->string('description')->nullable();
            $table->string('mission')->nullable();
            $table->string('profil')->nullable();
            $table->string('dossier')->nullable();
            $table->string('lien')->nullable();
            $table->string('lieu')->nullable();
            $table->string('libelle')->nullable();
            $table->string('date_lim')->nullable();
            $table->timestamps();
            $table->foreign('categorie_id')->references('id')->on('categories')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offres');
    }
}
