<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablesMessages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('chats', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('user_ori')->unsigned()->index();
          $table->integer('user_dst')->unsigned()->index();
          $table->text('text_chat');
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
      Schema::dropIfExists('chats');

    }
}
