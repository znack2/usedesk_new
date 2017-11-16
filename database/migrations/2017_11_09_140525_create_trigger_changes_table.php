<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTriggerChangesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trigger_changes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('trigger_id')->unsigned()->nullable()->index('trigger_changes_trigger_id_foreign');
			$table->integer('user_id')->unsigned()->nullable()->index('user_id');
			$table->integer('ticket_id')->unsigned()->index('trigger_changes_ticket_id_foreign');
			$table->text('data', 65535)->nullable();
			$table->dateTime('changed_at')->default('0000-00-00 00:00:00')->index('changed_at');
			$table->integer('old_status');
			$table->integer('new_status');
			$table->integer('company_id')->unsigned()->nullable()->index('trigger_changes_company_id_foreign');
			$table->index(['company_id','changed_at'], 'company_id_changed_at');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('trigger_changes');
	}

}
