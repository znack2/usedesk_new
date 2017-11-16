<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTicketReferencesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ticket_references', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('ticket_comment_id')->unsigned();
			$table->integer('user_id')->unsigned();
			$table->enum('status', array('0','1'));
			$table->string('email', 100)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ticket_references');
	}

}
