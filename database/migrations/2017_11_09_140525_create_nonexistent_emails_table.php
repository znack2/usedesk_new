<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNonexistentEmailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('nonexistent_emails', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('email', 100);
			$table->integer('company_id')->unsigned();
			$table->unique(['company_id','email'], 'company_id_email');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('nonexistent_emails');
	}

}
