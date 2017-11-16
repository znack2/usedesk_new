<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSlaOptionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sla_options', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('sla_id')->unsigned()->index('sla_id');
			$table->integer('sla_option_type_id')->unsigned()->index('sla_option_type_id');
			$table->integer('priority_id')->unsigned()->nullable()->index('priority_id');
			$table->integer('value')->unsigned()->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('sla_options');
	}

}
