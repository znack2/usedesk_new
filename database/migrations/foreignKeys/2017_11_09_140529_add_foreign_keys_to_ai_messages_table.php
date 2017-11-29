<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToAiMessagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('ai_messages', function(Blueprint $table)
		{
			$table->foreign('ticket_id', 'ai_messages_ibfk_1')->references('id')->on('tickets')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('ai_messages', function(Blueprint $table)
		{
			$table->dropForeign('ai_messages_ibfk_1');
		});
	}

}
