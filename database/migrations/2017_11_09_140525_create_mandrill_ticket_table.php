<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMandrillTicketTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mandrill_ticket', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('message');
			$table->integer('company_id');
			$table->timestamp('date')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->boolean('is_read');
			$table->integer('ticket_id');
			$table->text('request');
			$table->boolean('auto_replied');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('mandrill_ticket');
	}

}
