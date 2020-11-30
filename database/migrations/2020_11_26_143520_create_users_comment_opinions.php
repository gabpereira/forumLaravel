<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersCommentOpinions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_comment_opinions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');            
            $table->integer('opinion_id');
            $table->string('comment', 5000);
            $table->integer('points')->default('0');
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
        Schema::dropIfExists('users_comment_opinions');
    }
}
