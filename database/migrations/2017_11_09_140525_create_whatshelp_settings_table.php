<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWhatshelpSettingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('whatshelp_settings', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('uri');
			$table->integer('status');
			$table->string('whatshelp_id');
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
		Schema::drop('whatshelp_settings');
	}

}
