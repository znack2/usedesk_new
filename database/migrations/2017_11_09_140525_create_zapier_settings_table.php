<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateZapierSettingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('zapier_settings', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('ticket_url');
			$table->string('comment_url');
			$table->string('update_url');
			$table->string('csi_url');
			$table->integer('company_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('zapier_settings');
	}

}
