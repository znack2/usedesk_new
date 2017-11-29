<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUhCategoriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('uh_categories', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('title');
			$table->string('description')->nullable();
			$table->integer('order');
			$table->integer('collection_id')->index('uh_categories_collection_id_foreign');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('uh_categories');
	}

}
