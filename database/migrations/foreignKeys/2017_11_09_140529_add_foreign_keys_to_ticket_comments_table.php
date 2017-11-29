<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTicketCommentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('ticket_comments', function(Blueprint $table)
		{
			$table->foreign('client_id')->references('id')->on('clients')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('group_id')->references('id')->on('user_groups')->onUpdate('SET NULL')->onDelete('SET NULL');
			$table->foreign('ticket_id')->references('id')->on('tickets')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('user_id')->references('id')->on('users')->onUpdate('SET NULL')->onDelete('SET NULL');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('ticket_comments', function(Blueprint $table)
		{
			$table->dropForeign('ticket_comments_client_id_foreign');
			$table->dropForeign('ticket_comments_group_id_foreign');
			$table->dropForeign('ticket_comments_ticket_id_foreign');
			$table->dropForeign('ticket_comments_user_id_foreign');
		});
	}

}
