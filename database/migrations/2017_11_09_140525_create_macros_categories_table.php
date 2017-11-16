<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMacrosCategoriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('macros_categories', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->boolean('depth')->default(1);
			$table->integer('parent_id')->unsigned()->nullable();
			$table->integer('company_id')->unsigned()->index('company_id');
			$table->boolean('sort')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('macros_categories');
	}

}
