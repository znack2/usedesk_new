<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToMacrosesToMacrosCategoriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('macroses_to_macros_categories', function(Blueprint $table)
		{
			$table->foreign('macros_id', 'macroses_to_macros_categories_ibfk_3')->references('id')->on('macroses')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('macros_category_id', 'macroses_to_macros_categories_ibfk_4')->references('id')->on('macros_categories')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('macroses_to_macros_categories', function(Blueprint $table)
		{
			$table->dropForeign('macroses_to_macros_categories_ibfk_3');
			$table->dropForeign('macroses_to_macros_categories_ibfk_4');
		});
	}

}
