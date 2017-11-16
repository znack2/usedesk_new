<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClientCompaniesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('client_companies', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('note')->nullable();
			$table->text('domains', 65535)->nullable();
			$table->string('phone')->nullable();
			$table->string('address')->nullable();
			$table->boolean('vip')->default(0);
			$table->integer('company_id')->unsigned()->index('client_companies_company_id_foreign');
			$table->string('avatar')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('client_companies');
	}

}
