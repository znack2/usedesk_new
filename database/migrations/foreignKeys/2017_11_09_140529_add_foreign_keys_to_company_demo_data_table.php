<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCompanyDemoDataTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('company_demo_data', function(Blueprint $table)
		{
			$table->foreign('company_id', 'company_demo_data_ibfk_1')->references('id')->on('companies')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('company_demo_data', function(Blueprint $table)
		{
			$table->dropForeign('company_demo_data_ibfk_1');
		});
	}

}
