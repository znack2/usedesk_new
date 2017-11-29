<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMonitoring2MonitoringKeywordsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('monitoring_2_monitoring_keywords', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('monitoring_id');
			$table->integer('monitoring_keyword_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('monitoring_2_monitoring_keywords');
	}

}
