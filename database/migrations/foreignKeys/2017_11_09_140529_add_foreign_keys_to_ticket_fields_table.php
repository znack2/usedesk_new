<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTicketFieldsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('ticket_fields', function(Blueprint $table)
		{
			$table->foreign('company_id', 'ticket_fields_ibfk_3')->references('id')->on('companies')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('ticket_field_type_id', 'ticket_fields_ibfk_4')->references('id')->on('ticket_field_types')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('ticket_fields', function(Blueprint $table)
		{
			$table->dropForeign('ticket_fields_ibfk_3');
			$table->dropForeign('ticket_fields_ibfk_4');
		});
	}

}
