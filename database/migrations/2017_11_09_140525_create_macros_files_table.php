<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMacrosFilesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('macros_files', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('file');
			$table->integer('macros_id')->unsigned()->index('macros_files_macros_id_foreign');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('macros_files');
	}

}
