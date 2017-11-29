<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMacrosActionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('macros_actions', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('action');
			$table->text('value', 65535);
			$table->integer('macros_id')->unsigned()->index('macros_actions_macros_id_foreign');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('macros_actions');
	}

}
