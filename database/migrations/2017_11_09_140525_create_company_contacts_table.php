<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCompanyContactsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('company_contacts', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('city')->nullable();
			$table->string('address')->nullable();
			$table->text('phones', 65535)->nullable();
			$table->text('emails', 65535)->nullable();
			$table->text('account_details', 65535)->nullable();
			$table->integer('company_id')->unsigned()->index('company_contacts_company_id_foreign');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('company_contacts');
	}

}
