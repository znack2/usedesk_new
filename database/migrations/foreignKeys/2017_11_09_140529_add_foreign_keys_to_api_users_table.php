<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToApiUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('api_users', function(Blueprint $table)
		{
			$table->foreign('client')->references('id')->on('clients')->onUpdate('CASCADE')->onDelete('CASCADE');
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
		Schema::table('api_users', function(Blueprint $table)
		{
			$table->dropForeign('api_users_client_foreign');
			$table->dropForeign('api_users_user_foreign');
		});
	}

}
