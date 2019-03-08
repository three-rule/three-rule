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
            $table->integer('user_id')->unsigned();
            $table->boolean('official')->default(0);
            $table->string('school_name');
            $table->string('school_calling');
            $table->string('club_name');
            $table->string('club_calling');
            $table->string('image')->nullable();
            $table->string('policy')->default('(例)休んで勝つ!!');
            $table->string('rule_one')->default('(例)敬語禁止(リスペクトは大事)');
            $table->string('rule_two')->default('(例)批判禁止(できない理由を探さない,できる方法を考える)');
            $table->string('rule_three')->default('(例)とにかくトライ(トライしないことが失敗)');
            $table->string('tag_one')->default('攻撃');
            $table->string('tag_two')->default('守備');
            $table->string('tag_three')->default('走る系');
            $table->string('tag_four')->default('筋トレ');
            $table->string('tag_five')->default('ウォーミングアップ/ダウン');
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
