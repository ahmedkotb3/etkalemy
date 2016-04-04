<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventCommentReplaysTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('event_comment_replays', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('event_id')->unsigned()->index();
			$table->integer('user_id')->unsigned()->index();
			$table->integer('comment_id')->unsigned()->index();
			$table->string("text");
			$table->string("user_name");
			$table->string("user_image");
			$table->timestamps();
		});
		Schema::table("event_comment_replays" , function(Blueprint $table){
			$table->foreign("event_id")->references("id")->on("events")->onDelete("cascade");
			$table->foreign("user_id")->references("id")->on("users")->onDelete("cascade");
			$table->foreign("comment_id")->references("id")->on("event-comments")->onDelete("cascade");
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('event_comment_replays');
	}

}
