<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTicketCommentFilesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('ticket_comment_files', function(Blueprint $table)
		{
			$table->foreign('ticket_comment_id')->references('id')->on('ticket_comments')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('ticket_comment_files', function(Blueprint $table)
		{
			$table->dropForeign('ticket_comment_files_ticket_comment_id_foreign');
		});
	}

}
