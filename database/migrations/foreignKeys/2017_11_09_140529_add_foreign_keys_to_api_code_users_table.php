<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToApiCodeUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('api_code_users', function(Blueprint $table)
		{
			$table->foreign('client')->references('id')->on('api_clients')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('user')->references('id')->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('api_code_users', function(Blueprint $table)
		{
			$table->dropForeign('api_code_users_client_foreign');
			$table->dropForeign('api_code_users_user_foreign');
		});
	}

}
