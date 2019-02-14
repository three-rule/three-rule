<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJournalCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('journal_comments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('club_id')->unsigned();
            $table->integer('journal_id')->unsigned();
            $table->integer('commentable_id')->nullable();
            $table->string('comment');
            $table->string('image_comment');
            $table->timestamps();
            
            $table->foreign('journal_id')
                  ->references('id')->on('journals')
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
        Schema::dropIfExists('journal_comments');
    }
}
