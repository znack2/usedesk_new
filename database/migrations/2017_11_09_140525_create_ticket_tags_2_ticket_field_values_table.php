<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTicketTags2TicketFieldValuesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ticket_tags_2_ticket_field_values', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('ticket_tag_id')->unsigned()->index('ticket_tag_id');
			$table->integer('ticket_field_value_id')->unsigned()->index('ticket_field_value_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ticket_tags_2_ticket_field_values');
	}

}
