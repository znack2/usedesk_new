<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNpsSettingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('nps_settings', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('company_id');
			$table->string('channel_type');
			$table->integer('condition');
			$table->text('text', 65535);
			$table->timestamps();
			$table->boolean('active');
			$table->string('ticket_status');
			$table->string('csi_lang', 10)->default('ru');
			$table->boolean('use_custom_view')->default(0);
			$table->text('custom_view_code', 65535)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('nps_settings');
	}

}
