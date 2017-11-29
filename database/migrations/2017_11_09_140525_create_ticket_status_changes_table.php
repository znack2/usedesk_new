<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTicketStatusChangesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ticket_status_changes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('ticket_id')->unsigned()->index('ticket_id');
			$table->integer('ticket_status_id')->unsigned()->nullable()->index('ticket_status_id');
			$table->dateTime('changed_at');//->default('0000-00-00 00:00:00');
			$table->index(['changed_at','ticket_id'], 'changed_at_ticket_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ticket_status_changes');
	}

}
