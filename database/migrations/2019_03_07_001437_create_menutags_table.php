<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenutagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menutags', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('club_id')->unsigned();
            $table->string('tag_one')->default('攻撃');
            $table->string('tag_two')->default('守備');
            $table->string('tag_three')->default('走る系');
            $table->string('tag_four')->default('筋トレ');
            $table->string('tag_five')->default('ウォーミングアップ/ダウン');
            $table->timestamps();
            
            $table->foreign('club_id')
                  ->references('id')->on('clubs')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menutags');
    }
}
