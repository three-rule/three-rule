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
            $table->string('policy');
            $table->string('rule_one');
            $table->string('rule_two');
            $table->string('rule_three');
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
