<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMessengerSettingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('messenger_settings', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('company_id')->unsigned()->index('messenger_settings_company_id_foreign');
			$table->string('facebook_url', 100);
			$table->string('vk_url', 100);
			$table->string('viber_url', 100);
			$table->string('tg_url', 100);
			$table->string('whatsapp_token')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('messenger_settings');
	}

}
