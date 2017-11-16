<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTriggerHistoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('trigger_history', function(Blueprint $table)
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
		Schema::table('trigger_history', function(Blueprint $table)
		{
			$table->dropForeign('trigger_history_trigger_id_foreign');
		});
	}

}
