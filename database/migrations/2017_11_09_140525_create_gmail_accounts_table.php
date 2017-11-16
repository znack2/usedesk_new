<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGmailAccountsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('gmail_accounts', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('user_id');
			$table->integer('channel_id')->nullable();
			$table->integer('is_active')->nullable();
			$table->integer('company_id')->unsigned();
			$table->string('gmail_user_id');
			$table->string('refresh_token');
			$table->timestamp('date_create')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->integer('historyId')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('gmail_accounts');
	}

}
