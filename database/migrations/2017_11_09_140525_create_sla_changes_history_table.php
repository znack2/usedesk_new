<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSlaChangesHistoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sla_changes_history', function(Blueprint $table)
		{
			$table->integer('id')->unsigned();
			$table->integer('sla_id')->unsigned()->index('sla_id');
			$table->integer('user_id')->unsigned()->index('user_id');
			$table->dateTime('changed_at');//->default('0000-00-00 00:00:00');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('sla_changes_history');
	}

}
