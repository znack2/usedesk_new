<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMailingScheduleHistoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mailing_schedule_history', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('mailing_schedule_id')->unsigned()->index('mailing_schedule_history_mailing_schedule_id_foreign');
			$table->integer('company_id')->unsigned()->index('mailing_schedule_history_company_id_foreign');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('mailing_schedule_history');
	}

}
