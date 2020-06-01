<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAnswer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('accesories', function (Blueprint $table) {
            $table->integer('idPet');
            $table->integer('email_user');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('accesories', function (Blueprint $table) {
            $table->dropColumn(['idPet']);
            $table->dropColumn(['email_user']);
        });
    }
}
