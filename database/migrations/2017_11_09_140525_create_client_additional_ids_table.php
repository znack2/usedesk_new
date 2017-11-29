<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClientAdditionalIdsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('client_additional_ids', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('client_id')->unsigned()->nullable()->index('client_id');
			$table->string('value');
			$table->string('name', 100)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('client_additional_ids');
	}

}
