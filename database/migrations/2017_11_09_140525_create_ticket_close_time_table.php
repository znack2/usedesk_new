<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTicketCloseTimeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ticket_close_time', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('ticket_id')->unsigned()->index('ticket_id');
			$table->integer('company_id')->unsigned()->index('company_id');
			$table->integer('user_id')->unsigned()->nullable()->index('user_id');
			$table->integer('group_id')->unsigned()->nullable()->index('group_id');
			$table->integer('close_time')->unsigned()->default(0);
			$table->integer('work_time')->unsigned()->default(0);
			$table->boolean('by_first')->default(0);
			$table->dateTime('updated_at');//->default('0000-00-00 00:00:00');
			$table->index(['company_id','updated_at','ticket_id'], 'company_id_updated_at_ticket_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ticket_close_time');
	}

}
