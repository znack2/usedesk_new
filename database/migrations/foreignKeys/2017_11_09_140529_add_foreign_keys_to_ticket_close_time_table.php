<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTicketCloseTimeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('ticket_close_time', function(Blueprint $table)
		{
			$table->foreign('group_id', 'ticket_close_time_ibfk_10')->references('id')->on('user_groups')->onUpdate('SET NULL')->onDelete('SET NULL');
			$table->foreign('user_id', 'ticket_close_time_ibfk_11')->references('id')->on('users')->onUpdate('SET NULL')->onDelete('SET NULL');
			$table->foreign('ticket_id', 'ticket_close_time_ibfk_4')->references('id')->on('tickets')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('company_id', 'ticket_close_time_ibfk_6')->references('id')->on('companies')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('ticket_close_time', function(Blueprint $table)
		{
			$table->dropForeign('ticket_close_time_ibfk_10');
			$table->dropForeign('ticket_close_time_ibfk_11');
			$table->dropForeign('ticket_close_time_ibfk_4');
			$table->dropForeign('ticket_close_time_ibfk_6');
		});
	}

}
