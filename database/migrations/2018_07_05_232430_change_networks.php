<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeNetworks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      //post_networks
      Schema::dropIfExists('post_network');

      Schema::create('network_post', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('post_id')->unsigned()->index();
          $table->mediumInteger('network_id')->unsigned()->index();
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
      Schema::dropIfExists('network_post');

      Schema::create('post_network', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('post_id')->unsigned()->index();
          $table->mediumInteger('network_id')->unsigned()->index();
          $table->timestamps();
          $table->softdeletes();
      });
    }
}
