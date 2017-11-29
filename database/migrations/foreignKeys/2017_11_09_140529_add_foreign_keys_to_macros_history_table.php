<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToMacrosHistoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('macros_history', function(Blueprint $table)
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
		Schema::table('macros_history', function(Blueprint $table)
		{
			$table->dropForeign('macros_history_macros_id_foreign');
		});
	}

}
