<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      //Posts
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->text('text_post');
            $table->integer('user_id');
            $table->timestamps();
            $table->softdeletes();
        });
        //Images
        Schema::create('images', function (Blueprint $table) {
            $table->increments('id');
            $table->string('src');
            $table->integer('post_id')->unsigned()->index();
            $table->timestamps();
            $table->softdeletes();
        });

        //Networks
        Schema::create('networks', function (Blueprint $table) {
            $table->mediumIncrements('id');
            $table->string('description');
            $table->timestamps();
            $table->softdeletes();
        });
        //post_networks
        Schema::create('post_network', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('post_id')->unsigned()->index();
            $table->mediumInteger('network_id')->unsigned()->index();
            $table->timestamps();
            $table->softdeletes();
        });
        //relaciones entre usuarios
        Schema::create('relations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id_1')->unsigned()->index();
            $table->integer('user_id_2')->unsigned()->index();
            $table->smallInteger('state_id')->unsigned();
            $table->timestamps();
            $table->softdeletes();
        });
        //states
        Schema::create('states', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->string('description');
            $table->timestamps();
            $table->softdeletes();
        });
        //messages
        Schema::create('messages', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id_ori')->unsigned()->index();
            $table->integer('user_id_des')->unsigned()->index();
            $table->text('message');
            $table->timestamps();
            $table->softdeletes();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
        Schema::dropIfExists('images');
        Schema::dropIfExists('networks');
        Schema::dropIfExists('post_network');
        Schema::dropIfExists('relations');
        Schema::dropIfExists('states');
        Schema::dropIfExists('messages');
    }
}
