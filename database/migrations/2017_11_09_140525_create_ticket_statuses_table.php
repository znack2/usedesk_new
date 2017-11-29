<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTicketStatusesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ticket_statuses', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->enum('key', array('none','new','opened','solved','closed','deleted','pending','in_progress','spam','delivery','merged'))->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ticket_statuses');
	}

}
