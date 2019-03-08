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
            $table->integer('user_id')->unsigned();
            $table->string('icon')->default('http://placehold.jp/100x100.png');
            $table->string('oneword')->default('一言を入力');
            $table->string('rule_one')->default('常識を疑え');
            $table->string('rule_two')->default('できない理由を探さない、できる方法を考える');
            $table->string('rule_three')->default('脳がちぎれるほど考え、行動する');
            $table->timestamps();
            
            $table->foreign('user_id')
                  ->references('id')->on('users')
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
        Schema::dropIfExists('mypages');
    }
}
