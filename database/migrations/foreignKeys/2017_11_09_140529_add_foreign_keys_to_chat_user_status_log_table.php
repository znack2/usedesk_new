<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToChatUserStatusLogTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('chat_user_status_log', function(Blueprint $table)
		{
			$table->foreign('user_id', 'chat_user_status_log_ibfk_1')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('CASCADE');
			$table->foreign('company_id', 'chat_user_status_log_ibfk_2')->references('id')->on('companies')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('chat_user_status_log', function(Blueprint $table)
		{
			$table->dropForeign('chat_user_status_log_ibfk_1');
			$table->dropForeign('chat_user_status_log_ibfk_2');
		});
	}

}
