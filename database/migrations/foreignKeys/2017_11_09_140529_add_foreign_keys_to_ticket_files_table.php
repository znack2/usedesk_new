<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTicketFilesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('ticket_files', function(Blueprint $table)
		{
			$table->foreign('ticket_id', 'ticket_files_ibfk_1')->references('id')->on('tickets')->onUpdate('RESTRICT')->onDelete('CASCADE');
			$table->foreign('user_id', 'ticket_files_ibfk_2')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('SET NULL');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('ticket_files', function(Blueprint $table)
		{
			$table->dropForeign('ticket_files_ibfk_1');
			$table->dropForeign('ticket_files_ibfk_2');
		});
	}

}
