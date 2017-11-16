<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSlaDataTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sla_data', function(Blueprint $table)
		{
			$table->engine = 'MyISAM';
			$table->increments('id');
			$table->integer('ticket_id')->unsigned()->index('ticket_id');
			$table->integer('sla_option_id')->unsigned()->index('sla_option_id');
			$table->dateTime('created_at')->default('0000-00-00 00:00:00');
			$table->dateTime('ended_at')->default('0000-00-00 00:00:00');
			$table->boolean('pause')->default(0);
			$table->dateTime('paused_at')->default('0000-00-00 00:00:00');
			$table->boolean('sort')->default(1);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('sla_data');
	}

}
