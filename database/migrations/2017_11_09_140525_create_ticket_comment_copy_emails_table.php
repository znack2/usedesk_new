<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTicketCommentCopyEmailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ticket_comment_copy_emails', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('ticket_comment_id')->unsigned()->index('ticket_comment_copy_emails_ticket_comment_id_foreign');
			$table->enum('type', array('cc','bcc'));
			$table->string('email');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ticket_comment_copy_emails');
	}

}
