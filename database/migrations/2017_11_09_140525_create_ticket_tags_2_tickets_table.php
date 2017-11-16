<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTicketTags2TicketsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ticket_tags_2_tickets', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('ticket_id')->unsigned()->index('ticket_tags_2_tickets_ticket_id_foreign');
			$table->integer('ticket_tag_id')->unsigned()->index('ticket_tags_2_tickets_ticket_tag_id_foreign');
			$table->integer('tag_company_id')->unsigned()->nullable()->index('ticket_tags_2_tickets_tag_company_id_foreign');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ticket_tags_2_tickets');
	}

}
