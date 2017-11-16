<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateImportQueueTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('import_queue', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->enum('service', array('zendesk'));
			$table->enum('type', array('users','tickets','groups','companies','bind_group','bind_company'));
			$table->string('url');
			$table->boolean('is_start')->default(0);
			$table->boolean('is_complete')->default(0);
			$table->integer('connection_id');
			$table->boolean('is_error');
			$table->integer('priority');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('import_queue');
	}

}
