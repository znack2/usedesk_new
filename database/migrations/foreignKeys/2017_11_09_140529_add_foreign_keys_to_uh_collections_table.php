<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToUhCollectionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('uh_collections', function(Blueprint $table)
		{
			$table->foreign('account_id', 'uh_collections_acoount_id_foreign')->references('id')->on('uh_accoutns')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('uh_collections', function(Blueprint $table)
		{
			$table->dropForeign('uh_collections_acoount_id_foreign');
		});
	}

}
