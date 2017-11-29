<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTriggerChangesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('trigger_changes', function(Blueprint $table)
		{
			$table->foreign('company_id')->references('id')->on('companies')->onUpdate('SET NULL')->onDelete('SET NULL');
			$table->foreign('user_id', 'trigger_changes_ibfk_1')->references('id')->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('ticket_id')->references('id')->on('tickets')->onUpdate('CASCADE')->onDelete('CASCADE');
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
		Schema::table('trigger_changes', function(Blueprint $table)
		{
			$table->dropForeign('trigger_changes_company_id_foreign');
			$table->dropForeign('trigger_changes_ibfk_1');
			$table->dropForeign('trigger_changes_ticket_id_foreign');
			$table->dropForeign('trigger_changes_trigger_id_foreign');
		});
	}

}
