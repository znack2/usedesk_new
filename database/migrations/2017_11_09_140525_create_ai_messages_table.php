<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAiMessagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ai_messages', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('ticket_id')->unsigned()->index('ticket_id');
			$table->string('ai_chat_id');
			$table->text('message', 65535);
			$table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ai_messages');
	}

}
