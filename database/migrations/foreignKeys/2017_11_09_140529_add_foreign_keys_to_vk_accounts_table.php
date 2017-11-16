<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToVkAccountsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('vk_accounts', function(Blueprint $table)
		{
			$table->foreign('channel_id')->references('id')->on('company_email_channels')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('company_id')->references('id')->on('companies')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('vk_accounts', function(Blueprint $table)
		{
			$table->dropForeign('vk_accounts_channel_id_foreign');
			$table->dropForeign('vk_accounts_company_id_foreign');
		});
	}

}
