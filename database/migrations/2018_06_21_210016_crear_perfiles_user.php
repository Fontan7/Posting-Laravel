<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearPerfilesUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('rolls', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name');
          $table->timestamps();
          $table->softdeletes();
    });
    Schema::create('user_roll', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('user_id')->unsigned()->index();
        $table->mediumInteger('roll_id')->unsigned()->index();
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
        Schema::dropIfExists('rolls');
        Schema::dropIfExists('user_roll');
    }
}
