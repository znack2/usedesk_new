<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToSlaReplyHistoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('sla_reply_history', function(Blueprint $table)
		{
			$table->foreign('group_id', 'sla_reply_history_ibfk_10')->references('id')->on('user_groups')->onUpdate('SET NULL')->onDelete('SET NULL');
			$table->foreign('company_id', 'sla_reply_history_ibfk_11')->references('id')->on('companies')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('sla_option_id', 'sla_reply_history_ibfk_12')->references('id')->on('sla_options')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('ticket_id', 'sla_reply_history_ibfk_7')->references('id')->on('tickets')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('ticket_comment_id', 'sla_reply_history_ibfk_8')->references('id')->on('ticket_comments')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('user_id', 'sla_reply_history_ibfk_9')->references('id')->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('sla_reply_history', function(Blueprint $table)
		{
			$table->dropForeign('sla_reply_history_ibfk_10');
			$table->dropForeign('sla_reply_history_ibfk_11');
			$table->dropForeign('sla_reply_history_ibfk_12');
			$table->dropForeign('sla_reply_history_ibfk_7');
			$table->dropForeign('sla_reply_history_ibfk_8');
			$table->dropForeign('sla_reply_history_ibfk_9');
		});
	}

}
