<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTicketTags2TicketTagsChangesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ticket_tags_2_ticket_tags_changes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('ticket_tags_change_id')->unsigned()->index('ticket_tags_change_id');
			$table->integer('ticket_tag_id')->unsigned()->index('ticket_tag_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ticket_tags_2_ticket_tags_changes');
	}

}
