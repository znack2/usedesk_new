<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMonitoringKeywordsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('monitoring_keywords', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('word', 128);
			$table->dateTime('last_update_vk');
			$table->dateTime('last_update_twitter');
			$table->dateTime('last_update_facebook');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('monitoring_keywords');
	}

}
