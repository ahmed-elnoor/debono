<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTopicTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
					Schema::create('topic', function(Blueprint $table)
		{
			/* 
		title_topic
		sub_title_topic
		content_topic
		img_topic
*/
			$table->increments('id');
			$table->mediumText('title_topic');
			$table->mediumText('sub_title_topic');
			$table->longText('content_topic');
			$table->string('type_topic');
			$table->string('country_topic');
			$table->string('comment_status_topic');
			$table->string('img_topic');

			$table->rememberToken();
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
		//
		Schema::drop('topic');

	}

}
