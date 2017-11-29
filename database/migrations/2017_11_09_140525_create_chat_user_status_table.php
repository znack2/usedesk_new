<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateChatUserStatusTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('chat_user_status', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('user_id');
			$table->boolean('status');
			$table->dateTime('connected_at');//->default('0000-00-00 00:00:00');
			$table->dateTime('disconnected_at');//->default('0000-00-00 00:00:00');
			$table->string('token', 80);
			$table->boolean('online');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('chat_user_status');
	}

}
