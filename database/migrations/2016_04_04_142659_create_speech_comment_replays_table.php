<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpeechCommentReplaysTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('speech_comment_replays', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('speech_id')->unsigned()->index();
			$table->integer('user_id')->unsigned()->index();
			$table->integer('comment_id')->unsigned()->index();
			$table->string("text");
			$table->string("user_name");
			$table->string("user_image");
			$table->timestamps();
		});
		Schema::table("speech_comment_replays" , function(Blueprint $table){
			$table->foreign("speech_id")->references("id")->on("event-speeches")->onDelete("cascade");
			$table->foreign("user_id")->references("id")->on("users")->onDelete("cascade");
			$table->foreign("comment_id")->references("id")->on("speech-comments")->onDelete("cascade");
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('speech_comment_replays');
	}

}
