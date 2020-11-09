<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDemandesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demandes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('objet',100)->nullable();
            $table->integer('departement_id')->unsigned()->nullable();
            $table->integer('projet_id')->unsigned()->nullable();
            $table->text('message')->nullable();
            $table->integer('niveau_importance_id')->unsigned()->nullable();
            $table->integer('type_demande_id')->unsigned()->nullable();
            $table->string('statut',5)->nullable();
            $table->date('date_fermeture')->nullable();
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
        Schema::drop('demandes');
    }
}
