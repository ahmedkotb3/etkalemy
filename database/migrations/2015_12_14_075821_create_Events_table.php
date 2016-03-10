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
            $table->string('image');
            $table->string('place');
            $table->string('facebook_link', 60);
            $table->string('twitter_link', 60);
            $table->dateTime('date');
			$table->string('day');
			$table->text('description');
			$table->text('PDF');
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
