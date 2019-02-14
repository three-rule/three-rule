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
            $table->string('school_calling');
            $table->string('club_name');
            $table->string('club_calling');
            $table->string('image')->nullable();
            $table->string('policy')->default('(例)脳がちぎれる程考える');
            $table->string('rule_one')->default('(例)敬語禁止');
            $table->string('rule_two')->default('(例)批判禁止');
            $table->string('rule_three')->default('(例)より多く失敗する');
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
