<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGroupChannelPermissionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('group_channel_permissions', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('group_id')->unsigned()->index('group_channel_permissions_group_id_foreign');
			$table->integer('channel_id')->unsigned()->index('group_channel_permissions_channel_id_foreign');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('group_channel_permissions');
	}

}
