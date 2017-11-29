<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClientsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('clients', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name')->nullable();
			$table->string('avatar')->nullable();
			$table->string('position')->nullable();
			$table->text('note', 65535)->nullable();
			$table->integer('company_id')->unsigned();
			$table->string('zendesk_id')->nullable();
			$table->boolean('spammer')->default(0);
			$table->boolean('vip')->default(0);
			$table->integer('client_company_id')->unsigned()->nullable()->index('clients_client_company_id_foreign');
			$table->index(['company_id','name'], 'company_id_name');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('clients');
	}

}
