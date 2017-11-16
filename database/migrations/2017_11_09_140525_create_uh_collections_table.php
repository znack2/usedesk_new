<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUhCollectionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('uh_collections', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('title');
			$table->string('description')->nullable();
			$table->boolean('public')->default(0);
			$table->integer('order');
			$table->integer('account_id')->index('uh_collections_acoount_id_foreign');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('uh_collections');
	}

}
