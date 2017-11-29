<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCompanyCustomBlocksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('company_custom_blocks', function(Blueprint $table)
		{
			$table->foreign('company_id', 'company_custom_blocks_ibfk_2')->references('id')->on('companies')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('company_custom_blocks', function(Blueprint $table)
		{
			$table->dropForeign('company_custom_blocks_ibfk_2');
		});
	}

}
