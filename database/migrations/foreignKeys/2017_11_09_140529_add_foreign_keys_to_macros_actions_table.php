<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToMacrosActionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('macros_actions', function(Blueprint $table)
		{
			$table->foreign('macros_id')->references('id')->on('macroses')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('macros_actions', function(Blueprint $table)
		{
			$table->dropForeign('macros_actions_macros_id_foreign');
		});
	}

}
