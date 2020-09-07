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
            $table->string('nom_projet',100)->nullable();
            $table->string('description',255)->nullable();
            $table->integer('client_id')->unsigned()->nullable();
            $table->date('date_lancement')->nullable();
            $table->date('date_livraison')->nullable();
            $table->integer('user_created')->unsigned()->nullable();
            $table->integer('user_modified')->unsigned()->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('projets');
    }
}
