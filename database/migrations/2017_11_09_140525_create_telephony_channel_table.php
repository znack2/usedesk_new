<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTelephonyChannelTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('telephony_channel', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('channel_id');
			$table->enum('type', array('gravitel','mango'));
			$table->string('system_id');
			$table->string('token');
			$table->string('key');
			$table->text('phones', 65535)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('telephony_channel');
	}

}
