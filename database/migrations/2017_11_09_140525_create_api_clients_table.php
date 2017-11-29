<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateApiClientsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('api_clients', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('client_id', 40);
			$table->string('client_secret', 40);
			$table->string('client_name');
			$table->integer('company_id')->unsigned()->index('api_clients_company_id_foreign');
			$table->string('redirect_uri');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('api_clients');
	}

}
