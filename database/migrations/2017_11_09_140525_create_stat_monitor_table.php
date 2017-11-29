<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStatMonitorTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('stat_monitor', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->text('inbox', 65535);
			$table->text('outbox', 65535);
			$table->text('imap', 65535);
			$table->text('mandrill', 65535);
			$table->text('close', 65535);
			$table->text('agent', 65535);
			$table->timestamp('date')->default(DB::raw('CURRENT_TIMESTAMP'));
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('stat_monitor');
	}

}
