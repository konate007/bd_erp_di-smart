<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom_client',100)->nullable();
            $table->string('adresse',255)->nullable();
            $table->integer('telephone1')->unsigned();
            $table->integer('telephone2')->unsigned();
            $table->string('email',100)->unique();
            $table->string('site_web',100)->nullable();
            $table->text('notes')->nullable();
            $table->integer('user_created')->unsigned();
            $table->integer('user_modified')->unsigned();
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
        Schema::drop('clients');
    }
}
