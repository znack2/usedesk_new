<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTicketFieldOptionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('ticket_field_options', function(Blueprint $table)
		{
			$table->foreign('ticket_field_id', 'ticket_field_options_ibfk_2')->references('id')->on('ticket_fields')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('ticket_field_options', function(Blueprint $table)
		{
			$table->dropForeign('ticket_field_options_ibfk_2');
		});
	}

}
