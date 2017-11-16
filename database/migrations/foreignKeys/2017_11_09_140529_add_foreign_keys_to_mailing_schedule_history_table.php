<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToMailingScheduleHistoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('mailing_schedule_history', function(Blueprint $table)
		{
			$table->foreign('company_id')->references('id')->on('companies')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('mailing_schedule_id')->references('id')->on('mailing_schedule')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('mailing_schedule_history', function(Blueprint $table)
		{
			$table->dropForeign('mailing_schedule_history_company_id_foreign');
			$table->dropForeign('mailing_schedule_history_mailing_schedule_id_foreign');
		});
	}

}
