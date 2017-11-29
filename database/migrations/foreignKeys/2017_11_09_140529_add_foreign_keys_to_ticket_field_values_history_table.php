<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTicketFieldValuesHistoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('ticket_field_values_history', function(Blueprint $table)
		{
			$table->foreign('ticket_id', 'ticket_field_values_history_ibfk_2')->references('id')->on('tickets')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('ticket_field_id', 'ticket_field_values_history_ibfk_4')->references('id')->on('ticket_fields')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('ticket_field_values_history', function(Blueprint $table)
		{
			$table->dropForeign('ticket_field_values_history_ibfk_2');
			$table->dropForeign('ticket_field_values_history_ibfk_4');
		});
	}

}
