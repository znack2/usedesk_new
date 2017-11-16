<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCompanyWorkingDaysTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('company_working_days', function(Blueprint $table)
		{
			$table->increments('id');
			$table->enum('day', array('monday','tuesday','wednesday','thursday','friday','saturday','sunday'));
			$table->time('start')->default('09:00:00');
			$table->time('end')->default('18:00:00');
			$table->boolean('is_working')->default(0);
			$table->integer('company_id')->unsigned()->index('company_working_days_company_id_foreign');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('company_working_days');
	}

}
