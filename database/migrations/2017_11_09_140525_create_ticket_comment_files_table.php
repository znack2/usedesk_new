<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTicketCommentFilesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ticket_comment_files', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('file');
			$table->integer('ticket_comment_id')->unsigned()->index('ticket_comment_files_ticket_comment_id_foreign');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ticket_comment_files');
	}

}
