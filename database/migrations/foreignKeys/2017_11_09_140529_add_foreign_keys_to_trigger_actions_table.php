<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTriggerActionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('trigger_actions', function(Blueprint $table)
		{
			$table->foreign('trigger_id')->references('id')->on('triggers')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('trigger_actions', function(Blueprint $table)
		{
			$table->dropForeign('trigger_actions_trigger_id_foreign');
		});
	}

}
