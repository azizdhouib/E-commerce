<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProduitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('produit', function (Blueprint $table) {
                  $table->increments('id');
                  $table->integer('quantite');
                  $table->string('name_produit');
                  $table->longText('description');
                  $table->integer('prix');
                  $table->integer('categorie_id')->unsigned();
                  $table->longText('image');
                  $table->timestamps();
              });

              Schema::table('produit', function (Blueprint $table) {
                  $table->foreign('categorie_id')->references('id')->on('categorie');
              });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produit');
    }
}
