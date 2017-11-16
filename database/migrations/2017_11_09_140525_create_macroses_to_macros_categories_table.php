<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMacrosesToMacrosCategoriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('macroses_to_macros_categories', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('macros_id')->unsigned()->index('macros_id');
			$table->integer('macros_category_id')->unsigned()->index('macros_category_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('macroses_to_macros_categories');
	}

}
