<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMacrosHistoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('macros_history', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('macros_id')->unsigned()->index('macros_history_macros_id_foreign');
			$table->dateTime('used_at');//->default('0000-00-00 00:00:00')->index('used_at');
			$table->integer('ticket_id')->unsigned()->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('macros_history');
	}

}
