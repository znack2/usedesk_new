<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTwitterAccountsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('twitter_accounts', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id');
			$table->integer('channel_id')->unsigned()->index('twitter_accounts_channel_id_foreign');
			$table->boolean('is_active');
			$table->integer('company_id')->unsigned()->index('twitter_accounts_company_id_foreign');
			$table->string('oauth_token');
			$table->string('oauth_token_secret');
			$table->dateTime('date_create');
			$table->dateTime('updated_time')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('twitter_accounts');
	}

}
