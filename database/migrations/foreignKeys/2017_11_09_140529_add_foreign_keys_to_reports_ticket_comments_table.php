<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToReportsTicketCommentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('reports_ticket_comments', function(Blueprint $table)
		{
			$table->foreign('group_id', 'reports_ticket_comments_ibfk_10')->references('id')->on('user_groups')->onUpdate('SET NULL')->onDelete('SET NULL');
			$table->foreign('company_id', 'reports_ticket_comments_ibfk_11')->references('id')->on('companies')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('ticket_id', 'reports_ticket_comments_ibfk_5')->references('id')->on('tickets')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('ticket_comment_id', 'reports_ticket_comments_ibfk_6')->references('id')->on('ticket_comments')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('user_id', 'reports_ticket_comments_ibfk_7')->references('id')->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('reports_ticket_comments', function(Blueprint $table)
		{
			$table->dropForeign('reports_ticket_comments_ibfk_10');
			$table->dropForeign('reports_ticket_comments_ibfk_11');
			$table->dropForeign('reports_ticket_comments_ibfk_5');
			$table->dropForeign('reports_ticket_comments_ibfk_6');
			$table->dropForeign('reports_ticket_comments_ibfk_7');
		});
	}

}
