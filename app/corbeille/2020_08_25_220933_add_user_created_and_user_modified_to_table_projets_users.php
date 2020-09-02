<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUserCreatedAndUserModifiedToTableProjetsUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projet_users', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('user_id')->unsigned();
                $table->integer('projet_id')->unsigned();
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
        Schema::table('projet_users', function (Blueprint $table) {
            Schema::dropIfExists('projet_users');
        });
    }
}
