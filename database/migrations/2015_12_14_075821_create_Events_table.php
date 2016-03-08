<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('events', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('name');
            $table->string('video_url');
            $table->string('map_long', 60);
            $table->string('map_lat', 60);
            $table->string('facebook_link', 60);
            $table->string('twitter_link', 60);
            $table->string('type', 60);
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
        Schema::drop('events');
	}

}
