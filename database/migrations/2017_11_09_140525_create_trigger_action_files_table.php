<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTriggerActionFilesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trigger_action_files', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('file');
			$table->integer('trigger_action_id')->unsigned()->nullable()->index('trigger_action_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('trigger_action_files');
	}

}
