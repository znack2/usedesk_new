<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToSlaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('sla', function(Blueprint $table)
		{
			$table->foreign('company_id', 'sla_ibfk_3')->references('id')->on('companies')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('channel_id', 'sla_ibfk_4')->references('id')->on('company_email_channels')->onUpdate('SET NULL')->onDelete('SET NULL');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('sla', function(Blueprint $table)
		{
			$table->dropForeign('sla_ibfk_3');
			$table->dropForeign('sla_ibfk_4');
		});
	}

}
