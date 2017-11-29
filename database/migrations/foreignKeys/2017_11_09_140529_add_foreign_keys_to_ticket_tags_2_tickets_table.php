<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTicketTags2TicketsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('ticket_tags_2_tickets', function(Blueprint $table)
		{
			$table->foreign('tag_company_id')->references('id')->on('companies')->onUpdate('SET NULL')->onDelete('SET NULL');
			$table->foreign('ticket_id')->references('id')->on('tickets')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('ticket_tag_id')->references('id')->on('ticket_tags')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('ticket_tags_2_tickets', function(Blueprint $table)
		{
			$table->dropForeign('ticket_tags_2_tickets_tag_company_id_foreign');
			$table->dropForeign('ticket_tags_2_tickets_ticket_id_foreign');
			$table->dropForeign('ticket_tags_2_tickets_ticket_tag_id_foreign');
		});
	}

}
