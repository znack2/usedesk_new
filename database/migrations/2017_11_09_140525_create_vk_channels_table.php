<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVkChannelsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('vk_channels', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('company_email_channel_id')->unsigned()->nullable()->index('company_email_channel_id');
			$table->integer('company_id')->unsigned()->index('company_id');
			$table->integer('vk_group_id')->unsigned()->nullable();
			$table->string('group_key');
			$table->string('secret_key')->nullable();
			$table->string('vk_submit_string')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('vk_channels');
	}

}
