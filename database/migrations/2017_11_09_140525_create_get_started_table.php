<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGetStartedTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('get_started', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('key');
			$table->boolean('done')->default(0);
			$table->integer('company_id')->unsigned()->index('get_started_company_id_foreign');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('get_started');
	}

}
