<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToClientAdditionalIdsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('client_additional_ids', function(Blueprint $table)
		{
			$table->foreign('client_id', 'client_additional_ids_ibfk_1')->references('id')->on('clients')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('client_additional_ids', function(Blueprint $table)
		{
			$table->dropForeign('client_additional_ids_ibfk_1');
		});
	}

}
