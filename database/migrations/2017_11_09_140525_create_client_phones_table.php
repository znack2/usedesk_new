<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClientPhonesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('client_phones', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('phone')->index('client_phones_phone');
			$table->enum('type', array('home','mobile','stationary','fax','other'));
			$table->integer('client_id')->unsigned()->index('client_phones_client_id_foreign');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('client_phones');
	}

}
