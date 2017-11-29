<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSystemUpdatesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('system_updates', function(Blueprint $table)
		{
			$table->increments('id');
			$table->enum('type', array('problem','feature','article'));
			$table->string('name');
			$table->text('content', 65535);
			$table->string('button_name')->nullable();
			$table->string('button_url')->nullable();
			$table->dateTime('last_updated_at');//->default('0000-00-00 00:00:00');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('system_updates');
	}

}
