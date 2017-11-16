<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTickets2Users2UserGroupsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tickets_2_users_2_user_groups', function(Blueprint $table)
		{
			$table->foreign('ticket_id', 'tickets_2_users_2_user_groups_ibfk_4')->references('id')->on('tickets')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('user_id', 'tickets_2_users_2_user_groups_ibfk_5')->references('id')->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('group_id', 'tickets_2_users_2_user_groups_ibfk_6')->references('id')->on('user_groups')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tickets_2_users_2_user_groups', function(Blueprint $table)
		{
			$table->dropForeign('tickets_2_users_2_user_groups_ibfk_4');
			$table->dropForeign('tickets_2_users_2_user_groups_ibfk_5');
			$table->dropForeign('tickets_2_users_2_user_groups_ibfk_6');
		});
	}

}
