<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleCommentReplaysTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('article_comment_replays', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('article_id')->unsigned()->index();
			$table->integer('user_id')->unsigned()->index();
			$table->integer('comment_id')->unsigned()->index();
			$table->string("text");
			$table->string("user_name");
			$table->string("user_image");
			$table->timestamps();
		});

		Schema::table("article_comment_replays" , function(Blueprint $table){
			$table->foreign("article_id")->references("id")->on("articles")->onDelete("cascade");
			$table->foreign("user_id")->references("id")->on("users")->onDelete("cascade");
			$table->foreign("comment_id")->references("id")->on("article-comments")->onDelete("cascade");
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('article_comment_replays');
	}

}
