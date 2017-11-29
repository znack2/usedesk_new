<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTriggerHistoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trigger_history', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('trigger_id')->unsigned()->index('trigger_history_trigger_id_foreign');
			$table->integer('updated_users')->default(0);
			$table->integer('updated_tickets')->default(0);
			$table->dateTime('started_at');//->default('0000-00-00 00:00:00');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('trigger_history');
	}

}
