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
            $table->string('entreprise')->nullable();
            $table->string('site')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('linkedin')->nullable();
            $table->longText('titre')->nullable();
            $table->longText('description')->nullable();
            $table->longText('mission')->nullable();
            $table->longText('profil')->nullable();
            $table->longText('dossier')->nullable();
            $table->longText('lien')->nullable();
            $table->string('lieu')->nullable();
            $table->string('libelle')->nullable();
            $table->string('date_lim')->nullable();
            $table->boolean('valide')->default(0);
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
