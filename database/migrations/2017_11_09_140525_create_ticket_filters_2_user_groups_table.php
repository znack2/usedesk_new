<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTicketFilters2UserGroupsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ticket_filters_2_user_groups', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('ticket_filter_id')->unsigned()->index('ticket_filter_id');
			$table->integer('user_group_id')->unsigned()->index('user_group_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ticket_filters_2_user_groups');
	}

}
