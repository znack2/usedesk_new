<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateImapTicketTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('imap_ticket', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->text('message');
			$table->timestamp('date')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->integer('company_id');
			$table->integer('ticket_id');
			$table->boolean('is_read');
			$table->integer('channel_id');
			$table->text('from_name', 65535);
			$table->text('from_email', 65535);
			$table->text('subject', 65535);
			$table->text('body');
			$table->boolean('is_html');
			$table->text('files', 16777215);
			$table->text('code');
			$table->text('extra', 65535);
			$table->timestamp('timestamp')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->boolean('auto_replied');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('imap_ticket');
	}

}
