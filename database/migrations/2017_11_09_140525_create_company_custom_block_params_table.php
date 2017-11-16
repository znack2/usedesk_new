<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCompanyCustomBlockParamsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('company_custom_block_params', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('company_custom_block_id')->unsigned()->index('company_custom_block_id');
			$table->string('key');
			$table->string('value');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('company_custom_block_params');
	}

}
