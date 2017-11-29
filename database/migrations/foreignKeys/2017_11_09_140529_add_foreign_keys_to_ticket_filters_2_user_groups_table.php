<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTicketFilters2UserGroupsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('ticket_filters_2_user_groups', function(Blueprint $table)
		{
			$table->foreign('ticket_filter_id', 'ticket_filters_2_user_groups_ibfk_3')->references('id')->on('ticket_filters')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('user_group_id', 'ticket_filters_2_user_groups_ibfk_4')->references('id')->on('user_groups')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('ticket_filters_2_user_groups', function(Blueprint $table)
		{
			$table->dropForeign('ticket_filters_2_user_groups_ibfk_3');
			$table->dropForeign('ticket_filters_2_user_groups_ibfk_4');
		});
	}

}
