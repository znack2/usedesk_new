<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClientEmailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('client_emails', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('email')->index('client_emails_email');
			$table->integer('client_id')->unsigned()->index('client_emails_client_id_foreign');
			$table->boolean('fullcontact')->default(0);
			$table->string('status', 100);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('client_emails');
	}

}
