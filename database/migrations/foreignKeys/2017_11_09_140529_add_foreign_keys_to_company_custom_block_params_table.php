<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCompanyCustomBlockParamsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('company_custom_block_params', function(Blueprint $table)
		{
			$table->foreign('company_custom_block_id', 'company_custom_block_params_ibfk_2')->references('id')->on('company_custom_blocks')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('company_custom_block_params', function(Blueprint $table)
		{
			$table->dropForeign('company_custom_block_params_ibfk_2');
		});
	}

}
