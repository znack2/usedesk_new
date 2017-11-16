<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCompaniesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('companies', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('logotype')->nullable();
			$table->string('timezone')->default('Europe/Moscow');
			$table->boolean('signature_enabled')->default(1);
			$table->enum('blocked', array('none','activity','full'))->default('none');
			$table->dateTime('last_login_at')->nullable();
			$table->dateTime('registered_at')->default('0000-00-00 00:00:00');
			$table->boolean('import_enabled')->default(0);
			$table->boolean('get_started')->default(1);
			$table->string('lang', 10)->default('ru');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('companies');
	}

}
