<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCompanyIntegrationsLogTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('company_integrations_log', function(Blueprint $table)
		{
			$table->foreign('company_id', 'company_integrations_log_ibfk_3')->references('id')->on('companies')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('user_id', 'company_integrations_log_ibfk_4')->references('id')->on('users')->onUpdate('SET NULL')->onDelete('SET NULL');
			$table->foreign('integration_id', 'company_integrations_log_ibfk_6')->references('id')->on('integration')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('company_integrations_log', function(Blueprint $table)
		{
			$table->dropForeign('company_integrations_log_ibfk_3');
			$table->dropForeign('company_integrations_log_ibfk_4');
			$table->dropForeign('company_integrations_log_ibfk_6');
		});
	}

}
