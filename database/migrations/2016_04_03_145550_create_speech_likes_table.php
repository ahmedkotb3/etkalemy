<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpeechLikesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('speech_likes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('speech_id')->unsigned()->index();
			$table->integer('user_id')->unsigned()->index();
			$table->integer('like_status');
			$table->timestamps();
		});
		Schema::table("speech_likes" , function(Blueprint $table){
			$table->foreign("speech_id")->references("id")->on("event-speeches")->onDelete("cascade");
			$table->foreign("user_id")->references("id")->on("users")->onDelete("cascade");
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('speech_likes');
	}

}
