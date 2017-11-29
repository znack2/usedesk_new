<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTextSettingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('text_settings', function(Blueprint $table)
		{
			$table->increments('id');
			$table->boolean('use_typographer')->default(0);
			$table->integer('company_id')->unsigned()->index('text_settings_company_id_foreign');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('text_settings');
	}

}
