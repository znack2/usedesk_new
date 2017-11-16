<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVkAccountsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('vk_accounts', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id');
			$table->integer('channel_id')->unsigned()->index('vk_accounts_channel_id_foreign');
			$table->boolean('is_active');
			$table->integer('company_id')->unsigned()->index('vk_accounts_company_id_foreign');
			$table->string('token', 128);
			$table->dateTime('date_create');
			$table->dateTime('updated_time')->nullable();
			$table->integer('vk_user_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('vk_accounts');
	}

}
