<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCompanyGaLogTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('company_ga_log', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('company_id')->unsigned()->index('company_id');
			$table->dateTime('created_at');//->default('0000-00-00 00:00:00');
			$table->string('payment_transaction_id');
			$table->string('client_id');
			$table->string('user_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('company_ga_log');
	}

}
