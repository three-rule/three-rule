<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMypagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mypages', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('icon');
            $table->string('oneword');
            $table->string('goal_long');
            $table->date('commit_long');
            $table->string('goal_mid');
            $table->date('commit_mid');
            $table->string('goal_short');
            $table->date('commit_short');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mypages');
    }
}
