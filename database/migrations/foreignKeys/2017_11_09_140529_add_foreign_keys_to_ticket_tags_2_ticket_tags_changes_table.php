<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTicketTags2TicketTagsChangesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('ticket_tags_2_ticket_tags_changes', function(Blueprint $table)
		{
			$table->foreign('ticket_tag_id', 'ticket_tags_2_ticket_tags_changes_ibfk_10')->references('id')->on('ticket_tags')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('ticket_tags_change_id', 'ticket_tags_2_ticket_tags_changes_ibfk_9')->references('id')->on('ticket_tags_changes')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('ticket_tags_2_ticket_tags_changes', function(Blueprint $table)
		{
			$table->dropForeign('ticket_tags_2_ticket_tags_changes_ibfk_10');
			$table->dropForeign('ticket_tags_2_ticket_tags_changes_ibfk_9');
		});
	}

}
