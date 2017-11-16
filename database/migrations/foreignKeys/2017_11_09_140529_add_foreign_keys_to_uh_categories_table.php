<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToUhCategoriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('uh_categories', function(Blueprint $table)
		{
			$table->foreign('collection_id')->references('id')->on('uh_collections')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('uh_categories', function(Blueprint $table)
		{
			$table->dropForeign('uh_categories_collection_id_foreign');
		});
	}

}
