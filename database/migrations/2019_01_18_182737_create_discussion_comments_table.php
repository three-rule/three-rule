<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiscussionCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('discussion_comments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('club_id');
            $table->integer('discussion_id');
            $table->integer('commentable_id')->nullable();
            $table->string('comment');
            $table->string('image_comment');
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
        Schema::dropIfExists('discussion_comments');
    }
}
