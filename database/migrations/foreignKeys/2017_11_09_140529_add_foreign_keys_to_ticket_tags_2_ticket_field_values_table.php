<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTicketTags2TicketFieldValuesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('ticket_tags_2_ticket_field_values', function(Blueprint $table)
		{
			$table->foreign('ticket_tag_id', 'ticket_tags_2_ticket_field_values_ibfk_3')->references('id')->on('ticket_tags')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('ticket_field_value_id', 'ticket_tags_2_ticket_field_values_ibfk_4')->references('id')->on('ticket_field_values')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('ticket_tags_2_ticket_field_values', function(Blueprint $table)
		{
			$table->dropForeign('ticket_tags_2_ticket_field_values_ibfk_3');
			$table->dropForeign('ticket_tags_2_ticket_field_values_ibfk_4');
		});
	}

}
