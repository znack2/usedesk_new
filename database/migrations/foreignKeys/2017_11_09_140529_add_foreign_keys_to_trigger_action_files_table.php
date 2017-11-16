<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTriggerActionFilesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('trigger_action_files', function(Blueprint $table)
		{
			$table->foreign('trigger_action_id', 'trigger_action_files_ibfk_1')->references('id')->on('trigger_actions')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('trigger_action_files', function(Blueprint $table)
		{
			$table->dropForeign('trigger_action_files_ibfk_1');
		});
	}

}
