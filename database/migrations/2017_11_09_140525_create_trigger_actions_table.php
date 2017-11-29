<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTriggerActionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trigger_actions', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('action');
			$table->text('value', 65535);
			$table->integer('trigger_id')->unsigned()->index('trigger_actions_trigger_id_foreign');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('trigger_actions');
	}

}
