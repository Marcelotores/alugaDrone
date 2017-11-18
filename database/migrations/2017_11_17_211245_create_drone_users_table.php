<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDroneUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('drone_users', function (Blueprint $table) {
            $table->integer('drone_id')->unsigned();
            $table->foreign('drone_id')->
            references('id')->on('drones');
 
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->
            references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('drone_users');
    }
}
