<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTriggersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('triggers', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->boolean('enabled');
			$table->boolean('manual_starting');
			$table->integer('position')->unsigned()->default(0);
			$table->integer('company_id')->unsigned()->index('triggers_company_id_foreign');
			$table->boolean('use_word_forms')->default(0);
			$table->boolean('deleted');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('triggers');
	}

}
