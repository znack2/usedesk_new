<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateApiSettingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('api_settings', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('channel_id');
			$table->boolean('is_ticket');
			$table->boolean('is_csi');
			$table->boolean('is_comment');
			$table->boolean('is_change');
			$table->boolean('is_api_ticket');
			$table->boolean('is_api_comment');
			$table->boolean('is_api_change');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('api_settings');
	}

}
