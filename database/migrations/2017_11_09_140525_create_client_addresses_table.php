<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClientAddressesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('client_addresses', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('country');
			$table->string('city');
			$table->string('address');
			$table->enum('type', array('home','work','postal'));
			$table->integer('client_id')->unsigned()->index('client_addresses_client_id_foreign');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('client_addresses');
	}

}
