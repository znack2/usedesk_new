<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClientMessengersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('client_messengers', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('identity');
			$table->enum('type', array('imessage','skype','whatsapp','gtalk','telegram','other','jivo','viber'));
			$table->integer('client_id')->unsigned()->index('client_messengers_client_id_foreign');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('client_messengers');
	}

}
