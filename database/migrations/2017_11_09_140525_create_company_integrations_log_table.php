<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCompanyIntegrationsLogTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('company_integrations_log', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('integration_id')->index('integration_id');
			$table->integer('company_id')->unsigned()->index('company_id');
			$table->integer('user_id')->unsigned()->nullable()->index('user_id');
			$table->boolean('status');
			$table->dateTime('updated_at');//->default('0000-00-00 00:00:00');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('company_integrations_log');
	}

}
