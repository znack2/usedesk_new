<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTicketsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tickets', function(Blueprint $table)
		{
			$table->foreign('assignee_id')->references('id')->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('client_id')->references('id')->on('clients')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('company_id')->references('id')->on('companies')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('email_channel_id')->references('id')->on('company_email_channels')->onUpdate('SET NULL')->onDelete('SET NULL');
			$table->foreign('group')->references('id')->on('user_groups')->onUpdate('SET NULL')->onDelete('SET NULL');
			$table->foreign('status_id')->references('id')->on('ticket_statuses')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tickets', function(Blueprint $table)
		{
			$table->dropForeign('tickets_assignee_id_foreign');
			$table->dropForeign('tickets_client_id_foreign');
			$table->dropForeign('tickets_company_id_foreign');
			$table->dropForeign('tickets_email_channel_id_foreign');
			$table->dropForeign('tickets_group_foreign');
			$table->dropForeign('tickets_status_id_foreign');
		});
	}

}
