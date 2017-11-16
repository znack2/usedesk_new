<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTicketFiltersSortTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('ticket_filters_sort', function(Blueprint $table)
		{
			$table->foreign('ticket_filter_id', 'ticket_filters_sort_ibfk_3')->references('id')->on('ticket_filters')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('user_id', 'ticket_filters_sort_ibfk_4')->references('id')->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('ticket_filters_sort', function(Blueprint $table)
		{
			$table->dropForeign('ticket_filters_sort_ibfk_3');
			$table->dropForeign('ticket_filters_sort_ibfk_4');
		});
	}

}
