<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddcolumnsUserCreatedAndUserModifiedToTableProjetUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('projet_users', function (Blueprint $table) {
            $table->integer('user_created')->unsigned()->after('projet_id')->nullable();
            $table->integer('user_modified')->unsigned()->after('projet_id')->nullable();
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
            //
        });
    }
}
