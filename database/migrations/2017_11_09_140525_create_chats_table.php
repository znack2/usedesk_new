<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateChatsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('chats', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('token')->index('token');
			$table->string('socket_id', 100);
			$table->integer('company_id')->unsigned()->index('company_id');
			$table->timestamp('connected_at')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->dateTime('disconnected_at')->default('0000-00-00 00:00:00');
			$table->integer('client_id')->unsigned()->nullable()->index('client_id');
			$table->integer('user_id')->unsigned()->nullable()->index('user_id');
			$table->boolean('status');
			$table->integer('ticket_id')->unsigned()->nullable()->index('ticket');
			$table->boolean('is_missed');
			$table->boolean('online');
			$table->string('url');
			$table->string('email');
			$table->text('browser', 65535);
			$table->dateTime('missed_at')->nullable();
			$table->text('html');
			$table->string('bot_id');
			$table->string('platform', 100);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('chats');
	}

}
