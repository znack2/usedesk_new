<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTicketStatusChangesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('ticket_status_changes', function(Blueprint $table)
		{
			$table->foreign('ticket_id', 'ticket_status_changes_ibfk_3')->references('id')->on('tickets')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('ticket_status_id', 'ticket_status_changes_ibfk_4')->references('id')->on('ticket_statuses')->onUpdate('SET NULL')->onDelete('SET NULL');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('ticket_status_changes', function(Blueprint $table)
		{
			$table->dropForeign('ticket_status_changes_ibfk_3');
			$table->dropForeign('ticket_status_changes_ibfk_4');
		});
	}

}
