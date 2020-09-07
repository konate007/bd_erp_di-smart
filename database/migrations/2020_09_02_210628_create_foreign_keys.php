<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function(Blueprint $table) {
            $table->foreign('role_id')->references('id')->on('roles')
                        ->onDelete('cascade')
                        ->onUpdate('cascade');
        });
        Schema::table('projets', function(Blueprint $table) {
            $table->foreign('client_id')->references('id')->on('clients')
                        ->onDelete('cascade')
                        ->onUpdate('cascade');
        });
        Schema::table('projet_users', function(Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')
                        ->onDelete('cascade')
                        ->onUpdate('cascade');
        });

        Schema::table('projet_users', function(Blueprint $table) {
            $table->foreign('projet_id')->references('id')->on('projets')
                        ->onDelete('cascade')
                        ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function(Blueprint $table) {
            $table->dropForeign('users_role_id_foreign');
        });
        Schema::table('projets', function(Blueprint $table) {
            $table->dropForeign('projets_client_id_foreign');
        });
        Schema::table('projet_users', function(Blueprint $table) {
            $table->dropForeign('projet_users_user_id_foreign');
        });
        Schema::table('projet_users', function(Blueprint $table) {
            $table->dropForeign('projet_users_projet_id_foreign');
        });
    }
}
