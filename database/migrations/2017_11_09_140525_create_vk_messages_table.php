<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVkMessagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('vk_messages', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->text('message', 65535);
			$table->integer('company_id')->unsigned()->index('company_id');
			$table->integer('company_email_channel_id')->unsigned()->index('company_email_channel_id');
			$table->boolean('read')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('vk_messages');
	}

}
