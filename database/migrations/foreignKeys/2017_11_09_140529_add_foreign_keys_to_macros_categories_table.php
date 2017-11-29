<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToMacrosCategoriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('macros_categories', function(Blueprint $table)
		{
			$table->foreign('company_id', 'macros_categories_ibfk_2')->references('id')->on('companies')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('macros_categories', function(Blueprint $table)
		{
			$table->dropForeign('macros_categories_ibfk_2');
		});
	}

}
