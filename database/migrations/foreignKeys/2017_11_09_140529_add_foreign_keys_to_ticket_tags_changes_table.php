<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTicketTagsChangesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('ticket_tags_changes', function(Blueprint $table)
		{
			$table->foreign('ticket_id', 'ticket_tags_changes_ibfk_2')->references('id')->on('tickets')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('ticket_tags_changes', function(Blueprint $table)
		{
			$table->dropForeign('ticket_tags_changes_ibfk_2');
		});
	}

}
