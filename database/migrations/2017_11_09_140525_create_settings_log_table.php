<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSettingsLogTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('settings_log', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('model_id')->unsigned()->nullable();
			$table->string('model_name')->nullable();
			$table->string('type');
			$table->string('module');
			$table->integer('user_id')->unsigned()->nullable()->index('user_id');
			$table->integer('company_id')->unsigned()->nullable()->index('company_id');
			$table->integer('admin_id')->unsigned()->nullable()->index('admin_id');
			$table->text('changes', 65535);
			$table->dateTime('changed_at');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('settings_log');
	}

}
