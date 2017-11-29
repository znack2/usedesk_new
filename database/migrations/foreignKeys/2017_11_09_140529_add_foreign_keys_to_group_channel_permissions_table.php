<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToGroupChannelPermissionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('group_channel_permissions', function(Blueprint $table)
		{
			$table->foreign('channel_id')->references('id')->on('company_email_channels')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('group_id')->references('id')->on('user_groups')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('group_channel_permissions', function(Blueprint $table)
		{
			$table->dropForeign('group_channel_permissions_channel_id_foreign');
			$table->dropForeign('group_channel_permissions_group_id_foreign');
		});
	}

}
