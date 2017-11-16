<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateApiUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('api_users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('token', 40);
			$table->integer('user')->unsigned()->index('api_users_user_foreign');
			$table->integer('client')->unsigned()->index('api_users_client_foreign');
			$table->integer('company');
			$table->dateTime('expired')->default('0000-00-00 00:00:00');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('api_users');
	}

}
