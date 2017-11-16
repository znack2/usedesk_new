<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIntegrationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('integration', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('name');
			$table->string('keyword');
			$table->string('short_description', 500);
			$table->enum('type', array('free','paid'))->default('free');
			$table->integer('month_price')->nullable();
			$table->integer('year_price')->nullable();
			$table->text('long_description', 65535);
			$table->string('icon')->nullable();
			$table->boolean('default_status')->default(0);
			$table->boolean('status')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('integration');
	}

}
