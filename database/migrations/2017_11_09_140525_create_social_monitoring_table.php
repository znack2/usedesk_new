<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSocialMonitoringTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('social_monitoring', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->enum('type', array('twitter','facebook','vk'));
			$table->integer('social_id');
			$table->integer('post_id');
			$table->integer('group_id');
			$table->integer('ticket_id');
			$table->integer('created_at');
			$table->integer('channel_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('social_monitoring');
	}

}
