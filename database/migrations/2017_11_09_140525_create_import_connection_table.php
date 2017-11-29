<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateImportConnectionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('import_connection', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('company_id');
			$table->enum('type', array('zendesk'));
			$table->string('url');
			$table->string('login', 100);
			$table->string('password', 100);
			$table->string('token');
			$table->timestamp('date_start')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->integer('channel_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('import_connection');
	}

}
