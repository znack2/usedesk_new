<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToSlaChangesHistoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('sla_changes_history', function(Blueprint $table)
		{
			$table->foreign('sla_id', 'sla_changes_history_ibfk_3')->references('id')->on('sla')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('user_id', 'sla_changes_history_ibfk_4')->references('id')->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('sla_changes_history', function(Blueprint $table)
		{
			$table->dropForeign('sla_changes_history_ibfk_3');
			$table->dropForeign('sla_changes_history_ibfk_4');
		});
	}

}
