<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToVkChannelsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('vk_channels', function(Blueprint $table)
		{
			$table->foreign('company_email_channel_id', 'vk_channels_ibfk_3')->references('id')->on('company_email_channels')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('company_id', 'vk_channels_ibfk_5')->references('id')->on('companies')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('vk_channels', function(Blueprint $table)
		{
			$table->dropForeign('vk_channels_ibfk_3');
			$table->dropForeign('vk_channels_ibfk_5');
		});
	}

}
