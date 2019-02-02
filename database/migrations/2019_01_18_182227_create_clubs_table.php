<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClubsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clubs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('school_name');
            $table->integer('school_calling_id');
            $table->string('club_name');
            $table->integer('club_calling_id');
            $table->string('image');
            $table->string('policy')->default('方針を記入');
            $table->string('rule_one')->default('3rule①を記入');
            $table->string('rule_two')->default('3rule②を記入');
            $table->string('rule_three')->default('3rule③を記入');
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
        Schema::dropIfExists('clubs');
    }
}
